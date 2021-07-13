<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_admin');

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
        /*$data = [
            'title' => 'Dashboard',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),


        ];*/

        $data['title']   = 'Dashboard';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        //$data['rmh'] = $this->M_admin->getJml_rumah($kode);
        //$data['fas'] = $this->M_admin->getJml_fasilitas($kode);
        //$data['ln'] = $this->M_admin->getJml_lainnya($kode);
        $data['bnc'] = $this->M_admin->getJml_bnc();
        $data['kec'] = $this->M_admin->getKec_all();
        $data['des'] = $this->M_admin->getDesa_all();
        $data['upt'] = $this->M_admin->getUpt();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('admin/dashboard',  $data);
        $this->load->view('template/footer');
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

        ];
        $this->__view('admin/profile', $data);
    }

    public function desa()
    {
        $id = $this->input->post('id');
        $value = $this->M_admin->getDesa($id);
        echo json_encode($value);
    }

    public function formlaporan()
    {
        /*$data = [
            'title' => 'Form Laporan Kejadian',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
            'kec' => $this->M_admin->getKecamatan(),
            'ben' => $this->M_admin->getBencana(),
        ];
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $dariDB = $this->M_admin->kodeOtomatismj($kode);
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4, 3);
        $id_lapskrg = $nourut + 1;
        $res = array('id_laporan' => $id_lapskrg);
        $this->__view('admin/formlaporan', $data);*/

        $data['title']   = 'Form Laporan Kejadian';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kec'] = $this->M_admin->getKecamatan();
        $data['ben'] = $this->M_admin->getBencana();
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $dariDB = $this->M_admin->kodeOtomatismj($kode);
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4, 3);
        $id_lapskrg = $nourut + 1;
        $res = array('id_lap' => $id_lapskrg);

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('admin/formlaporan', $res, $data);
        $this->load->view('template/footer');
    }

    public function lapor()
    {

        $bencana = $this->input->post('jns_bencana');
        $id_lap = $this->input->post('id_laporan');
        $id_user = $this->input->post('id_user');
        $kec = $this->input->post('kecamatan');
        $des = $this->input->post('desa');
        $waktu_kjdn = $this->input->post('wkt');
        $koordinat = $this->input->post('koordinat');
        $tanggal = $this->input->post('tanggal');

        $jumlah_kerugian = $this->input->post('rugi');

        $laporan = array(
            'id_laporan' => $id_lap,
            'id_user' => $id_user,
            'id_kecamatan' => $kec,
            'id_desa' => $des,
            'id_bencana' => $bencana,
            'tanggal_kejadian' => $tanggal,
            'waktu_kejadian' => $waktu_kjdn,
            'jumlah_kerugian' => $jumlah_kerugian,
            'kordinat' => $koordinat,
            'foto_kejadian' => $this->upload_photo(),
        );
        //var_dump($laporan);
        //die;
        $this->db->insert('tb_laporan', $laporan);


        $kantor = $this->input->post('kantor');
        $sekolah = $this->input->post('sekolah');
        $rm = $this->input->post('rmakan');
        $masjid = $this->input->post('masjid');
        $tanggul = $this->input->post('tanggul');
        $puskesmas = $this->input->post('puskesmas');
        $jembatan = $this->input->post('jembatan');
        $jlnas = $this->input->post('jlnas');
        $jlkab = $this->input->post('jlkab');
        $turap = $this->input->post('turap');
        $bendung = $this->input->post('bendung');
        $jldes = $this->input->post('jldes');

        $fasilitasu = array(
            'id_laporan' => $id_lap,
            'gedung' => $kantor,
            'sekolah' => $sekolah,
            'rumah_makan' => $rm,
            'masjid' => $masjid,
            'tanggul_sungai' => $tanggul,
            'puskesmas' => $puskesmas,
            'jembatan' => $jembatan,
            'jalan_nas' => $jlnas,
            'jalan_kab' => $jlkab,
            'turab_jalan' => $turap,
            'bendungan' => $bendung,
            'jalan_des' => $jldes,
        );

        $this->db->insert('tb_fasilitasu', $fasilitasu);

        $irigasi = $this->input->post('irigasi');
        $tebing = $this->input->post('tebing');
        $sawah = $this->input->post('sawah');
        $perkebunan = $this->input->post('kebun');
        $tambak = $this->input->post('tambak');
        $talud = $this->input->post('talud');
        $pasar = $this->input->post('pasar');
        $tanah = $this->input->post('tnhgr');
        $pengJ = $this->input->post('pengungsi');
        $pengKK = $this->input->post('png');

        $lainya = array(
            'id_laporan' => $id_lap,
            'saluran_irigasi' => $irigasi,
            'tebing' => $tebing,
            'sawah' => $sawah,
            'perkebunan' => $perkebunan,
            'tambak' => $tambak,
            'talud' => $talud,
            'pasar' => $pasar,
            'pergerakan_tnh' => $tanah,
            'pengungsi_jiwa' => $pengJ,
            'pengungsi_kk' => $pengKK,
        );
        $this->db->insert('tb_lainya', $lainya);

        $roboh = $this->input->post('rbh');
        $rb = $this->input->post('rb');
        $rs = $this->input->post('rs');
        $rr = $this->input->post('rr');
        $terendam = $this->input->post('terendam');
        $terancam = $this->input->post('terancam');

        $rumah = array(
            'id_laporan' => $id_lap,
            'roboh' => $roboh,
            'rusak_ber' => $rb,
            'rusak_sed' => $rs,
            'rusak_ring' => $rr,
            'terendam' => $terendam,
            'terancam' => $terancam,
        );
        $this->db->insert('tb_rumah', $rumah);

        $md = $this->input->post('md');
        $lb = $this->input->post('lb');
        $lr = $this->input->post('lr');

        $korban = array(
            'id_laporan' => $id_lap,
            'mnggl_dunia' => $md,
            'luka_ring' => $lr,
            'luka_ber' => $lb,
        );
        $this->db->insert('tb_korban', $korban);

        $this->session->set_flashdata('success', 'Laporan Berhasil Dibuat');
        redirect('admin/formlaporan');
    }

    public function Laporan_Rumah()
    {
        $data = [
            'title' => 'Lihat Laporan Rumah',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();


        $data['lap'] = $this->M_admin->getRumah($kode);

        $this->__view('admin/Laporan_rumah', $data);
    }
    public function Laporan_Fasilitas()
    {
        $data = [
            'title' => 'Lihat Laporan Fasilitas Umum',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();


        $data['lap'] = $this->M_admin->getFasilitasU($kode);

        $this->__view('admin/laporan_fasilitas', $data);
    }
    public function Laporan_Lain()
    {
        $data = [
            'title' => 'Lihat Laporan Lainnya',
            'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['lap'] = $this->M_admin->getLainnya($kode);

        $this->__view('admin/laporanLain', $data);
    }

    public function upload_photo()
    {
        $config['upload_path']      = './assets/img/foto_kejadian/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['filename']        =  $this->input->post('foto');
        $config['max_size']         = 2048; // 1MB

        $this->load->library('upload', $config);

        // $this->upload->do_upload('input_profil_image');
        if ($this->upload->do_upload('foto')) { //foto adalah name dari inputannya
            return  $this->upload->data("file_name"); // jika sukses akan dikembalikan ke nama filenya
        }
        return ''; //jika tidak ada foto yang teruploud, jika tidak sukses dikembalikan kosong
    }

    public function editRumah()
    {

        $roboh = $this->input->post('rbh');
        $rb = $this->input->post('rb');
        $rs = $this->input->post('rs');
        $rr = $this->input->post('rr');
        $terendam = $this->input->post('td');
        $terancam = $this->input->post('tr');



        $rumah = array(

            'roboh' => $roboh,
            'rusak_ber' => $rb,
            'rusak_sed' => $rs,
            'rusak_ring' => $rr,
            'terendam' => $terendam,
            'terancam' => $terancam,
        );
        //$this->M_admin->editRmh($rumah);
        $this->db->where('id_lapru', $this->input->post('id'));
        $this->db->update('tb_rumah', $rumah);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Laporan Berhasil Diedit');
            redirect('admin/Laporan_rumah');
        } else {
            $this->session->set_flashdata('error', 'Laporan Gagal Diedit');
            redirect('admin/Laporan_rumah');
        }
    }

    public function editFasilitas()
    {
        $kantor = $this->input->post('kantor');
        $sekolah = $this->input->post('sekolah');
        $rm = $this->input->post('rmakan');
        $masjid = $this->input->post('masjid');
        $tanggul = $this->input->post('tanggul');
        $puskesmas = $this->input->post('puskesmas');
        $jembatan = $this->input->post('jembatan');
        $jlnas = $this->input->post('jlnas');
        $jlkab = $this->input->post('jlkab');
        $turap = $this->input->post('turap');
        $bendung = $this->input->post('bendung');
        $jldes = $this->input->post('jldes');

        $fasilitasu = array(

            'gedung' => $kantor,
            'sekolah' => $sekolah,
            'rumah_makan' => $rm,
            'masjid' => $masjid,
            'tanggul_sungai' => $tanggul,
            'puskesmas' => $puskesmas,
            'jembatan' => $jembatan,
            'jalan_nas' => $jlnas,
            'jalan_kab' => $jlkab,
            'turab_jalan' => $turap,
            'bendungan' => $bendung,
            'jalan_des' => $jldes,
        );

        $this->db->where('id_lapfa', $this->input->post('id'));
        $this->db->update('tb_fasilitasu', $fasilitasu);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Laporan Berhasil Diedit');
            redirect('admin/Laporan_fasilitas');
        } else {
            $this->session->set_flashdata('error', 'Laporan Gagal Diedit');
            redirect('admin/Laporan_fasilitas');
        }
    }

    public function EditLainnya()
    {
        $irigasi = $this->input->post('irigasi');
        $tebing = $this->input->post('tebing');
        $sawah = $this->input->post('sawah');
        $perkebunan = $this->input->post('kebun');
        $tambak = $this->input->post('tambak');
        $talud = $this->input->post('talud');
        $pasar = $this->input->post('pasar');
        $tanah = $this->input->post('tnhgr');
        $pengJ = $this->input->post('pengungsi');
        $pengKK = $this->input->post('png');

        $lainya = array(

            'saluran_irigasi' => $irigasi,
            'tebing' => $tebing,
            'sawah' => $sawah,
            'perkebunan' => $perkebunan,
            'tambak' => $tambak,
            'talud' => $talud,
            'pasar' => $pasar,
            'pergerakan_tnh' => $tanah,
            'pengungsi_jiwa' => $pengJ,
            'pengungsi_kk' => $pengKK,
        );
        $this->db->where('id_lapla', $this->input->post('id'));
        $this->db->update('tb_lainya', $lainya);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Laporan Berhasil Diedit');
            redirect('admin/laporanLain');
        } else {
            $this->session->set_flashdata('error', 'Laporan Gagal Diedit');
            redirect('admin/laporanLain');
        }
    }

    public function lapAll()
    {
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lap'] = $this->M_admin->getAll($kode);
        $data['title']  = 'Lihat Laporan Rumah';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function hapusRumah($id_lapru)
    {
        $this->db->delete('tb_rumah', ['id_lapru' => $id_lapru]);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/Laporan_rumah');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['rumah'] = $this->M_admin->getRumah('tb_rumah')->result();

        $this->load->view('rumah_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('Laporan_rumah.pdf', array('Attachment' => 0));
    }

    public function Print()
    {
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lap'] = $this->M_admin->getAll($kode);
        $data['title']  = 'Lihat Laporan Rumah';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        //$this->__view('petugas_piket/print', $data);

        $this->load->view('admin/print',  $data);
    }
}

/* End of file Admin.php */
