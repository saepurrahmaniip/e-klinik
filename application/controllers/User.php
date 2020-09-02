<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar');
        $this->load->view('templates/home_top_navigation', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/home_footer');
    }
}
