<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Peta Cilacap';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('template/breadcumb');
        $this->load->view('template/coba');
        $this->load->view('template/footer');
    }

    public function test()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('template/breadcumb');
        $this->load->view('coba');
        $this->load->view('template/footer');
    }
}

/* End of file Coba.php */
