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
}
