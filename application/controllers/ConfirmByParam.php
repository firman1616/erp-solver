<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConfirmByParam extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        // if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {

        //     redirect(base_url("login"));
        // }
        $this->load->model('M_confirm', 'confirm');
    }

    public function index()
    {
        $data = [
            'title' => 'Confirm By Param',
            'conten' => 'conten/confirm_by_param'
        ];

        $this->load->view('template/conten', $data);
    }

    public function confirm_kikc_bydate()
    {
        $tanggal = $this->input->post('kikcdate');
        $this->confirm->confirm_kikc($tanggal);
        $this->session->set_flashdata('kikc', 'KIKC Update To Confirm');
        redirect('ConfirmByParam');
    }

    public function confirm_wow_bydate()
    {
        $tanggal = $this->input->post('wowdate');
        $this->confirm->confirm_kikc($tanggal);
        $this->session->set_flashdata('wow', 'KIKC Update To Confirm');
        redirect('ConfirmByParam');
    }

    public function confirm_kikc_between()
    {
        $start = $this->input->post('kikc_start');
        $end = $this->input->post('kikc_end');
        $this->confirm->confirm_kikc_between($start, $end);
        $this->session->set_flashdata('kikc', 'KIKC Update To Confirm');
        redirect('ConfirmByParam');
    }

    public function confirm_wop_between()
    {
        $start = $this->input->post('wop_start');
        $end = $this->input->post('wop_end');
        $this->confirm->confirm_wop_between($start, $end);
        $this->session->set_flashdata('wop', 'wop Update To Confirm');
        redirect('ConfirmByParam');
    }

    function confirm_wop()
    {
        $sts = $this->input->post('status2');
        $trn = $this->input->post('trans_no2');
        $this->confirm->update_status_wop($sts, $trn);
        $this->session->set_flashdata('wop', 'Status WOP update');
        redirect('ConfirmByParam');
    }

    function confirm_wom()
    {
        $sts = $this->input->post('wom_stat');
        $trn = $this->input->post('wom_trans');
        $this->confirm->update_status_wom($sts, $trn);
        $this->session->set_flashdata('wom', 'Status WOM update');
        redirect('ConfirmByParam');
    }
}
