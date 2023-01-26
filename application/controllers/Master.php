<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        // if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {

        //     redirect(base_url("login"));
        // }
        $this->load->model('M_local', 'local');
    }

    public function index()
    {
        $data = [
            'title' => 'Master Solver',
            'conten' => 'conten/master_solver',
            'master_list' => $this->local->get_data_db2('tbl_master_solver')
        ];

        $this->load->view('template/conten', $data);
    }

    public function add_master()
    {
        $table = 'tbl_master_solver';
        $data = [
            'nama_solver' => $this->input->post('name'),
            'sub_nama_solver' => $this->input->post('subname'),
            'icon' => $this->input->post('icon'),
            'link_solver' => $this->input->post('controller')
        ];
        $this->local->simpan_data_db2($table, $data);
        $this->session->set_flashdata('master', 'Added');
        redirect('Master');
    }
}
