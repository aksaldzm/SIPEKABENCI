<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required'         => 'Email harus diisi',
            'valid_email'    => 'Email tidak valid'
        ]); // validasi email
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required'        => 'Password harus diisi'
        ]); // validasi password

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            // jika validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email        = $this->input->post('email');
        $password     = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        // usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['active'] == 1) {
                ///cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email'         => $user['email'],
                        'nama'          => $user['nama'],
                        'level_id'      => $user['level_id'],
                        'upt'           => $user['upt']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['level_id'] == 1) {
                        redirect('supadmin');
                    } else if ($user['level_id'] == 2) {
                        redirect('admin');
                    } elseif ($user['level_id'] == 3) {
                        redirect('Petugas_piket');
                    }
                } else {
                    //pesan jika password yang diinputkan salah
                    $this->session->set_flashdata('error', 'Password Salah!');
                    redirect('auth');
                }
            } else {
                //pesan jika email yang digunakan belum aktif
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					E-mail anda belum diaktivasi. Silahkan aktivasi e-mail anda
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
						</div>');
                redirect('auth');
            }
        } else {
            //pesan jika email yang digunakan untuk login belum terdaftar didalam sistem
            $this->session->set_flashdata('error', 'Email Belum Terdaftar!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');

        $this->session->set_flashdata('success', 'Anda berhasil keluar');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title']  = 'Access Blocked';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('auth/blocked', $data);
    }
}

/* End of file Auth.php */
