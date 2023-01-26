<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        // if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {

        //     redirect(base_url("login"));
        // }
    }

    public function index()
    {
        $data = [
            'title' => 'User',
            'conten' => 'conten/users',
            'list_user' => $this->m_data->get_data('users')
        ];

        $this->load->view('template/conten', $data);
    }
}
