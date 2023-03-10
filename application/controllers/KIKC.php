<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KIKC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ikt', 'ikt');
    }

    public function index()
    {
        // $get_data_wow = $this->db->query("SELECT * FROM prod.work_order_weaving limit 10");
        $data = [
            'title' => 'List KIKC',
            'conten' => 'conten/kikc',
            'list_kikc' => $this->m_data->get_data('prod.work_order_dyeing')
        ];

        $this->load->view('template/conten', $data);
    }

    public function v_edit_data($kikc)
    {
        $data = [
            'title' => 'Edit KIKC',
            'conten' => 'conten/edit_kikc',
            'edit_kikc' => $this->m_data->get_data_by_id('prod.work_order_dyeing', array('id' => $kikc)),
        ];

        $this->load->view('template/conten', $data);
    }

    public function update_kikc($kikc)
    {
        $table = 'prod.work_order_dyeing';
        $data = [
            'wod_no' => $this->input->post('kikc'),
            'ref_no' => $this->input->post('kikc')
        ];
        $where = array('wod_no' => $kikc);
        $this->m_data->update_data($table, $data, $where);
        $this->session->set_flashdata('kikc', 'Updated');
        redirect('KIKC');
    }

    public function reopen($id)
    {
        $table = 'prod.work_order_dyeing';
        $data = [
            'wow_status' => '1',
            'confirmed_at' => date('Y-m-d H:i:s'),
            'confirmed_by' => '387'
        ];
        $where = array('wod_no' => $id);
        $this->m_data->update_data($table, $data, $where);
        $this->session->set_flashdata('wod', 'Reopen');
        redirect('KIKC');
    }

    public function confirm($id)
    {
        $table = 'prod.work_order_dyeing';
        $data = [
            'wow_status' => '3',
            'confirmed_at' => date('Y-m-d H:i:s'),
            'confirmed_by' => '387'
        ];
        $where = array('wod_no' => $id);
        $this->m_data->update_data($table, $data, $where);
        $this->session->set_flashdata('wod', 'Confirm');
        redirect('KIKC');
    }

    public function confirm_kikc()
    {
        $this->ikt->confirm_kikc();
        $this->session->set_flashdata('wod', 'KIKC Update To Confirm');
        redirect('Dashboard');
    }
}
