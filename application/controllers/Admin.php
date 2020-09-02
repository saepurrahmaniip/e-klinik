<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->view('admin/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function pendaftaran_pengguna()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[pengguna.nama]');
        $this->form_validation->set_rules('no_telpon_pengguna', 'No Telpon', 'required|is_unique[pengguna.no_telp]|numeric|min_length[11]');
        $this->form_validation->set_rules('role', 'Jenis Role', 'required');
        $this->form_validation->set_rules('alamat_pengguna', 'Alamat', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Pendaftaran Pengguna';
            $this->load->view('templates/home_header', $data);
            $this->load->view('templates/home_sidebar');
            $this->load->view('templates/home_top_navigation');
            $this->load->view('admin/form_data_pengguna');
            $this->load->view('templates/home_footer');
        } else {
            $this->load->helper('date');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'kode_role' => htmlspecialchars($this->input->post('role', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telpon_pengguna', true)),
                'status' => '0',
                'alamat' => htmlspecialchars($this->input->post('alamat_pengguna', true)),
                'photo' => 'default.jpg',
                'tanggal_pembuatan' => mdate('%Y-%m-%d %H:%i:%s', now())
            ];
            //return $this->db->insert('pengguna', $data);
            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('admin/data_pengguna');
        }
    }

    public function data_pengguna()
    {
        $data['judul'] = 'Data Pengguna';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar');
        $this->load->view('templates/home_top_navigation');
        $this->load->view('admin/data_pengguna', $data);
        $this->load->view('templates/home_footer');
    }

    // public function pendaftaran_pasien()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/form_data_pasien');
    //     $this->load->view('templates/home_footer');
    // }

    // public function data_pasien()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/data_pasien');
    //     $this->load->view('templates/home_footer');
    // }

    // public function form_data_rekam_medis()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/form_data_rekam_medis');
    //     $this->load->view('templates/home_footer');
    // }

    // public function data_rekam_medis()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/data_rekam_medis');
    //     $this->load->view('templates/home_footer');
    // }

    // public function form_data_stok_opname()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/form_data_stok_opname');
    //     $this->load->view('templates/home_footer');
    // }

    // public function data_stok_opname()
    // {
    //     $this->load->view('templates/home_header');
    //     $this->load->view('templates/home_sidebar');
    //     $this->load->view('templates/home_top_navigation');
    //     $this->load->view('admin/data_stok_opname');
    //     $this->load->view('templates/home_footer');
    // }
}
