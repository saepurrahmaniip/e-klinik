<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['pengguna'] = $this->Admin_model->getAllPengguna();
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar', $data);
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
            $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('templates/home_header', $data);
            $this->load->view('templates/home_sidebar');
            $this->load->view('templates/home_top_navigation', $data);
            $this->load->view('admin/form_data_pengguna');
            $this->load->view('templates/home_footer');
        } else {

            $this->Admin_model->tambahDataPengguna();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/data_pengguna');
        }
    }

    public function data_pengguna()
    {
        $data['judul'] = 'Data Pengguna';
        $data['pengguna'] = $this->Admin_model->getAllPengguna();
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->input->post('keyword')) {
            $data['pengguna'] = $this->Admin_model->cariDataPengguna();
        }
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_sidebar');
        $this->load->view('templates/home_top_navigation', $data);
        $this->load->view('admin/data_pengguna', $data);
        $this->load->view('templates/home_footer');
    }

    public function hapusPengguna($id)
    {
        $this->Admin_model->hapusDataPengguna($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/data_pengguna');
    }

    public function detailPengguna($id)
    {
        $data['judul'] = 'Detail Data Pengguna';
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengguna'] = $this->Admin_model->getPenggunaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubahPengguna($id)
    {
        $data['judul'] = 'Form Ubah Data Pengguna';
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengguna'] = $this->Admin_model->getPenggunaById($id);
        $data['role'] = ['1', '2', '3'];
        $data['status'] = ['0', '1'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_telpon_pengguna', 'No Telpon', 'required|numeric|min_length[11]');
        $this->form_validation->set_rules('role', 'Jenis Role', 'required');
        $this->form_validation->set_rules('alamat_pengguna', 'Alamat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        //$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/home_header', $data);
            $this->load->view('templates/home_sidebar');
            $this->load->view('templates/home_top_navigation', $data);
            $this->load->view('admin/form_ubah_data_pengguna', $data);
            $this->load->view('templates/home_footer');
        } else {
            $this->Admin_model->ubahDataPengguna();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/data_pengguna');
        }
    }
}
