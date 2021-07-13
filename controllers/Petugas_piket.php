<?php

defined('BASEPATH') or exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Petugas_piket extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_petugas');
        $this->load->model('M_export');

        //Do your magic here
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
    public function index()
    {
        $data['title']   = 'Dashboard';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['rmh'] = $this->M_admin->getJml_rumah($kode);
        //$data['fas'] = $this->M_admin->getJml_fasilitas($kode);
        //$data['ln'] = $this->M_admin->getJml_lainnya($kode);
        $data['bnc'] = $this->M_petugas->getJml_bnc();
        $data['kec'] = $this->M_petugas->getKec_all();
        $data['des'] = $this->M_petugas->getDesa_all();
        $data['upt'] = $this->M_petugas->getUpt();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('petugas_piket/dashboard',  $data);
        $this->load->view('template/footer');
    }

    public function logbook()
    {
        $data = [
            'title' => 'Log Book',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'ben' => $this->M_petugas->getBencana(),
        ];

        $this->__view('petugas_piket/logbook', $data);
    }

    public function simpanLogbook()
    {
        $data = [
            'koor_piket' => $this->input->post('koor_piket'),
            'petugas_piket' => $this->input->post('petugas_piket'),
            'tgl_piket' => $this->input->post('tgl_piket'),
            'jenis_bnc' => $this->input->post('jns_bencana'),
            'tgl_kejadian' => $this->input->post('tgl_kejadian'),
            'waktu' => $this->input->post('waktu'),
            'lokasi' => $this->input->post('lokasi'),
            'dampak' => $this->input->post('dampak'),
            'sumber_inf' => $this->input->post('sumber'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('tb_logbook', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        redirect('Petugas_piket/logbook');
    }

    public function tampilLogbook()
    {
        $data = [
            'title' => 'Log Book',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'log' => $this->M_export->getLogbook()->result_array(),
        ];

        $this->__view('petugas_piket/lihatlogbook', $data);
    }

    public function export()
    {
        $log = $this->M_export->getLogbook()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Koordinator PIket')
            ->setCellValue('C1', 'Petugas Piket')
            ->setCellValue('D1', 'Tanggal Piket')
            ->setCellValue('E1', 'Jenis Bencana')
            ->setCellValue('F1', 'Tanggal Kejadian')
            ->setCellValue('G1', 'Lokasi')
            ->setCellValue('H1', 'Dampak')
            ->setCellValue('I1', 'Sumber Informasi')
            ->setCellValue('J1', 'Keterangan');

        $kolom = 2;
        $nomor = 1;
        foreach ($log as $lg) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $lg->koor_piket)
                ->setCellValue('C' . $kolom, $lg->petugas_piket)
                ->setCellValue('D' . $kolom, date('j F Y', strtotime($lg->tgl_piket)))
                ->setCellValue('E' . $kolom, $lg->jenis_bnc)
                ->setCellValue('F' . $kolom, $lg->tgl_kejadian)
                ->setCellValue('G' . $kolom, $lg->lokasi)
                ->setCellValue('H' . $kolom, $lg->dampak)
                ->setCellValue('I' . $kolom, $lg->sumber_inf)
                ->setCellValue('J' . $kolom, $lg->keterangan);

            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Latihan.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function Print($id_logbook)
    {
        $data = [
            'title' => 'Print',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

        ];
        $data['log'] =  $this->M_petugas->getLogbook($id_logbook)->result_array();

        //$this->__view('petugas_piket/print', $data);

        $this->load->view('petugas_piket/print',  $data);
    }
}

/* End of file Petugas_piket.php */
