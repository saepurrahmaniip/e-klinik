<?php

class Admin_model extends CI_model
{
    public function getAllPengguna()
    {
        return $this->db->get('pengguna')->result_array();
    }

    public function tambahDataPengguna()
    {
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

        $this->db->insert('pengguna', $data);
    }

    public function hapusDataPengguna($kode_user)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pengguna', ['kode_user' => $kode_user]);
    }

    public function getPenggunaById($kode_user)
    {
        return $this->db->get_where('pengguna', ['kode_user' => $kode_user])->row_array();
    }

    public function getPengguna()
    {
        //return $this->db->get_where('pengguna', ['kode-user' => $kode_user])->row_array();
        return $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
    }


    public function ubahDataPengguna()
    {
        $this->load->helper('date');
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),

            'kode_role' => htmlspecialchars($this->input->post('role', true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telpon_pengguna', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat_pengguna', true)),
            'photo' => 'default.jpg',
            'tanggal_pembuatan' => mdate('%Y-%m-%d %H:%i:%s', now())
        ];

        $this->db->where('kode_user', $this->input->post('kode_user'));
        $this->db->update('pengguna', $data);
    }

    public function cariDataPengguna()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('pengguna')->result_array();
    }
}
