<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katrun extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        // if ($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1) {

        //     redirect(base_url("login"));
        // }
        $this->load->model('M_garment', 'garment');
    }

    public function index()
    {
        $data = [
            'title' => 'Kebutuhan Patrun',
            'conten' => 'conten/katrun'
        ];
        $this->load->view('template/conten', $data);
    }

    public function update_no_bukti()
    {
        $no_bukti1 = $this->input->post('no_bukti1');
        $no_bukti2 = $this->input->post('no_bukti2');
        $this->garment->update_nobukti($no_bukti1, $no_bukti2);
        $this->session->set_flashdata('katrun', 'Ubah');
        redirect('Katrun');
    }
}
