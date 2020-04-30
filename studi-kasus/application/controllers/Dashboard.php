<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        // ketika login akan diberikan session userdata id user
        $id_user = $this->session->userdata('id_user');
        // id user ini digunakan untuk mengambil data user
        $data['user'] = $this->User_model->getRow($id_user);

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
