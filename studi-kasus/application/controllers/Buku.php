<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        login();
    }

    public function index()
    {
        $data['title'] = 'Data Buku';
        $data['buku'] = $this->Buku_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah buku';
            $this->load->view('templates/header', $data);
            $this->load->view('buku/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Buku_model->insert();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Ditambahkan');
            redirect('buku');
        }
    }

    function detail()
    {
        // uri->segment(1) ==> controller
        // uri->segment(2) ==> method
        // uri->segment(3) ==> parameter
        // dalam hal ini id yang dikirim dari footer
        $id_buku = $this->uri->segment(3);
        $data['detailbuku'] = $this->Buku_model->getRow($id_buku);
        $this->load->view('buku/detail', $data);
    }
}
