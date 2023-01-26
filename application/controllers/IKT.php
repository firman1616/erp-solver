<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IKT extends CI_Controller
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
            'title' => 'List WOW',
            'conten' => 'conten/wow',
            'list_wow' => $this->ikt->get_ikt()
        ];

        $this->load->view('template/conten', $data);
    }

    public function unlock_ikt($ikt)
    {
        // $this->ikt->unlock($ikt);
        $table = 'prod.work_order_weaving';
        $data = ['wow_status' => '1'];
        $where = array(
            'wow_no' => $ikt,
        );
        $this->m_data->update_data($table, $data, $where);
        $this->session->set_flashdata('wow', 'Opened');
        redirect('IKT');
    }

    public function lock_ikt($ikt)
    {
        // $this->ikt->lock($ikt);
        // $tanggal = date('Y-m-d HH:ii:ss');
        $table = 'prod.work_order_weaving';
        $data = [
            'wow_status' => '3',
            'confirmed_at' => date('Y-m-d H:i:s'),
            'confirmed_by' => '387'
        ];
        $where = array('wow_no' => $ikt);
        $this->m_data->update_data($table, $data, $where);
        $this->session->set_flashdata('wow', 'Confirmed');
        redirect('IKT');
    }
}
