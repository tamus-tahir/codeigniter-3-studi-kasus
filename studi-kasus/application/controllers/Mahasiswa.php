<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        login();
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('nim', 'nim', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Mahasiswa_model->insert();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Ditambahkan');
            redirect('mahasiswa');
        }
    }
}
