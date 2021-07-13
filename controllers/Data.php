<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data', 'data');
        is_logged_in();
    }

    public function kecamatan()
    {
        $data = [
            'title'     => 'Data Kecamatan',
            'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'kecamatan' => $this->data->getKecamatan()
        ];
        $this->__view('data/v_kecamatan', $data);
    }

    public function tambahKecamatan()
    {
        $this->form_validation->set_rules('id_kecamatan', 'Id Kecamatan', 'trim|required');
        $this->form_validation->set_rules('kecamatan', 'Nama Kecamatan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'     => 'Data Kecamatan',
                'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
                'kecamatan' => $this->data->getKecamatan()
            ];

            $this->__view('data/v_kecamatan', $data);
            $this->session->set_flashdata('error', "Data tidak tervalidasi");
        } else {
            $this->admin->tambahKecamatan();
            $this->session->set_flashdata('success', "Data berhasil ditambahkan");
            redirect('data/kecamatan');
        }
    }

    public function desa()
    {
        $data = [
            'title'     => 'Data Desa',
            'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'desa'      => $this->data->getDesa(),
            'kecamatan' => $this->data->getKecamatan()
        ];
        $this->__view('data/v_desa', $data);
    }

    public function tempatEvakuasi()
    {
        $data = [
            'title'     => 'Tempat Evakuasi Bencana',
            'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'tempat'    => $this->data->getTempatevakuasi()
        ];
        $this->__view('data/v_tempatEvakuasi', $data);
    }

    public function tambahTempat()
    {
        $this->form_validation->set_rules('nama', 'Nama tempat', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');
        $this->form_validation->set_rules('telp', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('luas', 'Luas', 'trim|required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'     => 'Tempat Evakuasi Bencana',
                'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
                'tempat'    => $this->data->getTempatevakuasi()
            ];

            $this->__view('data/v_tempatEvakuasi', $data);
            $this->session->set_flashdata('error', "Data tidak tervalidasi");
        } else {
            $this->data->tambahTempat();
            $this->session->set_flashdata('success', "Data berhasil ditambahkan");
            redirect('data/tempatEvakuasi');
        }
    }

    public function editTempat()
    {
        $this->form_validation->set_rules('nama', 'Nama tempat', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
        $this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');
        $this->form_validation->set_rules('telp', 'No Telepon', 'trim|required');
        $this->form_validation->set_rules('luas', 'Luas', 'trim|required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title'     => 'Tempat Evakuasi Bencana',
                'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
                'tempat'    => $this->data->getTempatevakuasi()
            ];

            $this->__view('data/v_tempatEvakuasi', $data);
            $this->session->set_flashdata('error', "Data tidak tervalidasi");
        } else {
            $this->data->editTempat();
            $this->session->set_flashdata('success', "Data berhasil diupdate");
            redirect('data/tempatEvakuasi');
        }
    }

    public function hapusTempat($id)
    {
        $where = ['id_tempat' => $id];
        $hapus = $this->data->hapus($where, 'tb_evakuasi');
        $this->session->set_flashdata('success', "Data berhasil dihapus");
        redirect('data/tempatEvakuasi');
    }

    public function petaTempatevakuasi()
    {
        $data = [
            'title'     => 'Peta Tempat Evakuasi',
            'user'      => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'tempat'    => $this->data->getTempatevakuasi()
        ];
        $this->__view('data/v_petaTempatevakuasi', $data);
    }

    public function tempat()
    {
        $data = $this->db->get('tb_evakuasi')->result_array();
        echo json_encode($data);
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

    private function __view($view, $data = [])
    {
        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view($view);
        $this->load->view('template/footer');
    }
}
/* End of file Data.php */
