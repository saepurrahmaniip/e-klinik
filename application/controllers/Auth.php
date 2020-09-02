<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pengguna', ['username' => $username])->row_array();
        if ($user) {
            if ($user['status'] == 0) {
                # code...
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'kode_role' => $user['kode_role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['kode_role'] == 1) {
                        # code...
                        redirect('admin/index');
                    } else {
                        redirect('user/index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password salah </div>');
                    redirect('auth');
                }
            } else {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username belum aktif!. Silahkan hubungi admin </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username belum terdaftar!. Silahkan hubungi admin </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('kode_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Anda telah keluar </div>');
        redirect('auth/index');
    }
}
