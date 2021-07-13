<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supadmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_superadmin');
		is_logged_in();
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
		$data = [
			'title' => 'Dashboard',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

		];
		//$data['donut'] = $this->M_admin->getPie();
		$data['rmh'] = $this->M_superadmin->getJml_rumah();
		$data['fas'] = $this->M_superadmin->getJml_fasilitas();
		$data['ln'] = $this->M_superadmin->getJml_lainnya();
		$data['bnc'] = $this->M_superadmin->getJml_bnc();
		$data['lap'] = $this->M_superadmin->getJml_laporan();
		$data['rum'] = $this->M_superadmin->getRmh_rsk();
		$data['fass'] = $this->M_superadmin->getFas_rsk();
		$data['other'] = $this->M_superadmin->getLan_rsk();


		$this->__view('superadmin/dashboard', $data);
	}

	public function profil()
	{
		$data = [
			'title' => 'Profil',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

		];
		$this->__view('superadmin/profile', $data);
	}


	public function akun()
	{
		$data = [
			'title' => 'Manajemen Akun',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),
			'akun' => $this->M_superadmin->getAkun(),
			'level' => $this->M_superadmin->getLevel(),

		];

		$data['upt'] = 	$this->M_superadmin->getUpt();
		$this->__view('superadmin/akun', $data);
	}

	public function editAkun()
	{
		$data = [
			'nama_user'		=> $this->input->post('nama'),
			'email'		=> $this->input->post('email'),
			'level_id'	=> $this->input->post('level'),
			'upt'		=> $this->input->post('upt'),
			'active' 	=> $this->input->post('active')
		];

		$where = ['id_user' => $this->input->post('id')];

		$this->M_superadmin->editAkun($where, $data, 'tb_user');
		$this->session->set_flashdata('success', 'Akun berhasil diupdate!');
		redirect('supadmin/akun');
	}

	public function tambahAkun()
	{
		$data['title']  = 'Buat Akun';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['level']	= $this->M_superadmin->getLevel();
		$data['upt']	= $this->M_superadmin->getUpt();

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[tb_user.email]');
		$this->form_validation->set_rules('level_id', 'Level', 'trim|required');
		$this->form_validation->set_rules('upt', 'Asal UPT', 'trim|required');
		$this->form_validation->set_rules('kode', 'Kode', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[8]|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/breadcrumb', $data);
			$this->load->view('superadmin/tambahAkun', ['error'	=> ''], $data);
			$this->load->view('template/footer');
		} else {
			$config['upload_path']          = './assets/img/profile/';
			$config['allowed_types']        = 'jpg|jpeg|png';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/navbar', $data);
				$this->load->view('template/pageheader', $data);
				$this->load->view('superadmin/tambahAkun', $error, $data);
				$this->load->view('template/footer');
			} else {
				$foto		= $this->upload->data();
				$email   	= $this->input->post('email', true);

				$data = [
					'nama_user' 			=> htmlspecialchars($this->input->post('nama', true)),
					'email' 		=> htmlspecialchars($email),
					'password' 		=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'level_id' 		=> $this->input->post('level_id'),
					'active' 		=> 1,
					'foto' 			=> $foto['file_name'],
					'kode'			=> $this->input->post('kode'),
					'upt'			=> $this->input->post('upt')
				];
				//var_dump($data);
				//die;
				$this->db->insert('tb_user', $data);
				$this->session->set_flashdata('success', 'Akun berhasil dibuat');
				redirect('supadmin/tambahAkun');
			}
		}
	}

	public function hapusAkun($id_user)
	{
		$_id    = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
		unlink("assets/img/profile/" . $_id['foto']);
		$this->db->delete('tb_user', ['id_user' => $id_user]);
		$this->session->set_flashdata('pesan', 'Akun berhasil dihapus!');
		redirect('supadmin/akun');
	}

	public function kecDes()
	{
		$data['title']  = 'Kecamatan & Desa';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['desa']	= $this->m_superadmin->getDesa();
		$data['kec']	= $this->m_superadmin->getKecamatan();

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/pageheader', $data);
		$this->load->view('superadmin/kecDes', $data);
		$this->load->view('template/footer');
	}

	public function lihatLaporan()
	{
		$data['title']  = 'Lihat Laporan';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lap']	= $this->M_superadmin->getLaporan();



		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/breadcrumb', $data);
		$this->load->view('superadmin/lihatlaporan', $data);
		$this->load->view('template/footer');
	}

	public function lihatLogbook()
	{
		$data['title']  = 'Lihat Laporan';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['log']	= $this->M_superadmin->getLogbook()->result_array();


		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/breadcrumb', $data);
		$this->load->view('superadmin/lihatlogbook', $data);
		$this->load->view('template/footer');
	}
	public function lihatRumah($id_laporan)
	{
		$data['title']  = 'Lihat Laporan';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lap']	= $this->m_superadmin->getLaporan();
		$data['ll'] 	= $this->m_superadmin->getRumah($id_laporan);


		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/pageheader', $data);
		$this->load->view('superadmin/detailrumah', $data);
		$this->load->view('template/footer');
	}
	public function lihatFasilitasUmum($id_laporan)
	{
		$data['title']  = 'Lihat Laporan';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lap']	= $this->m_superadmin->getLaporan();
		$data['ll'] 	= $this->m_superadmin->getFasU($id_laporan);


		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/pageheader', $data);
		$this->load->view('superadmin/detailfasilitasU', $data);
		$this->load->view('template/footer');
	}
	public function lihatLainnya($id_laporan)
	{
		$data['title']  = 'Lihat Laporan';
		$data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lap']	= $this->m_superadmin->getLaporan();
		$data['ll'] 	= $this->m_superadmin->getLainnya($id_laporan);


		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/pageheader', $data);
		$this->load->view('superadmin/detailLainnya', $data);
		$this->load->view('template/footer');
	}

	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['lap'] = $this->M_superadmin->getLaporan();

		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('Laporan.pdf', array('Attachment' => 0));
	}

	public function Print()
	{
		$data = [
			'title' => 'Print',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

		];
		$data['lap']	= $this->M_superadmin->getLaporan();

		//$this->__view('petugas_piket/print', $data);

		$this->load->view('superadmin/printex',  $data);
	}

	public function Printin($id_logbook)
	{
		$data = [
			'title' => 'Print',
			'user' => $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array(),

		];
		$data['log'] =  $this->M_petugas->getLogbook($id_logbook)->result_array();

		//$this->__view('petugas_piket/print', $data);

		$this->load->view('superadmin/print',  $data);
	}
}

/* End of file Supadmin.php */
/* Location: ./application/controllers/Supadmin.php */