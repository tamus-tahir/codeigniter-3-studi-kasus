<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        admin();
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->User_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|matches[passconfirm]');
        $this->form_validation->set_rules('passconfirm', 'konfirmasi password', 'required|trim|min_length[8]|matches[password]');
        $this->form_validation->set_rules('nama', 'nama lengkap', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah User';
            $this->load->view('templates/header', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->insert();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Ditambahkan');
            redirect('user');
        }
    }

    public function ubah($id_user)
    {
        $this->form_validation->set_rules('nama', 'nama lengkap', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Ubah User';
            $data['user'] = $this->User_model->getRow($id_user);

            $this->load->view('templates/header', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->update();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah');
            redirect('user');
        }
    }

    public function hapus($id_user)
    {
        $this->User_model->delete($id_user);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
            redirect('user');
        }
    }
}
