<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data', 'data');
        $this->load->model('m_admin', 'admin');
    }

    public function index()
    {
        $data = [
            'title'     => 'Inpoten - Ben',
            'data'      => $this->admin->getData(),
            'desa'      => $this->data->getAllKoorDesa()
        ];

        $this->__view('home/v_home', $data);
    }

    public function bencanaDesa()
    {
        $id = $this->input->post('id');
        $this->db->select('*');
        $this->db->from('tb_potensi');
        $this->db->join('tb_kecamatan', 'tb_potensi.id_kecamatan = tb_kecamatan.id_kecamatan');
        $this->db->join('tb_desa', 'tb_potensi.id_desa = tb_desa.id_desa');
        $this->db->join('tb_bencana', 'tb_potensi.id_bencana = tb_bencana.id_bencana');
        $this->db->where('tb_potensi.id_desa', $id);
        $result = $this->db->get()->result();
        echo json_encode($result);
    }

    // PETA TEMPAT EVAKUASI
    public function petaTempatevakuasi()
    {
        $data = [
            'title'     => 'Peta Tempat Evakuasi',
            'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'tempat'    => $this->data->getTempatevakuasi()
        ];
        $this->__view('home/v_petaTempatevakuasi', $data);
    }

    private function __view($view, $data = [])
    {
        $this->load->view('home/header', $data);
        $this->load->view('home/sidebar', $data);
        $this->load->view($view);
        $this->load->view('home/footer');
    }
}

/* End of file Home.php */
