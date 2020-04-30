<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['title'] = 'Home';

        // config
        // variabel jumlah data yang tampil pada halaman
        $limit = 3;
        // data akan start dari berapa ==> 0
        $start = $this->uri->segment(3);
        // url yang akan digunakan pagination ==> index wajib ditulis
        $config['base_url'] = base_url('home/index/');
        // mengambil junlah semua data
        $config['total_rows'] = $this->Home_model->getNumRows();
        // jumlah data yang tampil pada halaman
        $config['per_page'] = $limit;

        // styling paginations class bootsrap pagination
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['attributes'] = ['class' => 'page-link'];

        // menyiapkan config
        $this->pagination->initialize($config);
        // membuat link pagination
        $data['halaman'] = $this->pagination->create_links();
        // data buku dimulai dari data ke berapa dan dilimit berapa data
        $data['buku'] = $this->Home_model->getPagination($limit, $start);

        // kareana halaman user yang tidak login hanya 1 kita tida perlu membuat template
        $this->load->view('home/index', $data);
    }

    function detail()
    {
        $id_buku = $this->uri->segment(3);
        $data['detailbuku'] = $this->Home_model->getRow($id_buku);
        $this->load->view('home/detail', $data);
    }
}
