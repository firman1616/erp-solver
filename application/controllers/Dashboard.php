<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
            'title' => 'Dashboard',
            'conten' => 'conten/dashboard',
            'problem_list' => $this->local->get_data_db2('tbl_master_solver')
        ];

        $this->load->view('template/conten', $data);
    }
}
