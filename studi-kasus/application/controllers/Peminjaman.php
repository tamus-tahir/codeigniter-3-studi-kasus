<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        login();
    }

    public function index()
    {
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->Peminjaman_model->get();

        $this->load->view('templates/header', $data);
        $this->load->view('peminjaman/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_buku', 'id_buku', 'required');
        $this->form_validation->set_rules('id_mahasiswa', 'id_mahasiswa', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Peminjaman';
            $this->load->view('templates/header', $data);
            $this->load->view('peminjaman/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Peminjaman_model->insert();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Ditambahkan');
            redirect('peminjaman');
        }
    }

    public function ubah($id_peminjaman)
    {
        $this->form_validation->set_rules('id_buku', 'id_buku', 'required');
        $this->form_validation->set_rules('id_mahasiswa', 'id_mahasiswa', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Ubah Peminjaman';
            $data['peminjaman'] = $this->Peminjaman_model->getRow($id_peminjaman);

            $this->load->view('templates/header', $data);
            $this->load->view('peminjaman/ubah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Peminjaman_model->update();
            $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah');
            redirect('peminjaman');
        }
    }

    public function getMahasiswa()
    {

        // $_GET['term'] bawaan dari jQueri autocomplete akan menerima parameter yang dikirm dari keyword pada input
        // isset jika variabelnya ada
        if (isset($_GET['term'])) {
            // ambil data mahasiswa berdasarkan parameter yang dikirim
            $mahasiswa = $this->Peminjaman_model->getMahasiswa($_GET['term']);
            // jika data mahasiswa ada
            if ($mahasiswa) {
                // datanya akan kita pecah dan bangun ulang karena awalnya 'nim' = $m->nim
                // sendangkan jQueri autocomplete akan menerima akan menggap keyword pada input sebagai label
                foreach ($mahasiswa as $m)
                    $data[] = [
                        'label' => $m->nim,
                        'id_mahasiswa' => $m->id_mahasiswa,
                        'nama' => $m->nama
                    ];

                /* 
                    json_encode adalah fungsi yang mengubah format data Array menjadi JSON
                    JSON (JavaScript Object Notation) 
                    Adalah sebuah format data yang digunakan untuk pertukaran dan penyimpanan data
                    Data JSON dapat digunakan di semua bahasa pemograman
                */
                echo json_encode($data);
            }
        }
    }

    public function getBuku()
    {
        if (isset($_GET['term'])) {
            $buku = $this->Peminjaman_model->getBuku($_GET['term']);
            if ($buku) {
                foreach ($buku as $b)
                    $data[] = [
                        'label' => $b->judul,
                        'id_buku' => $b->id_buku,
                        'deskripsi' => $b->deskripsi,
                        'gambar' => $b->gambar
                    ];
                echo json_encode($data);
            }
        }
    }

    function detail()
    {
        $id_peminjaman = $this->uri->segment(3);
        $data['detailpeminjaman'] = $this->Peminjaman_model->getRow($id_peminjaman);
        $this->load->view('peminjaman/detail', $data);
    }

    public function hapus($id_peminjaman)
    {
        $this->Peminjaman_model->delete($id_peminjaman);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
            redirect('peminjaman');
        }
    }

    public function pengembalian($id_peminjaman)
    {
        // mengembalikan buku
        $this->Peminjaman_model->return($id_peminjaman);
        // mengambil  data pengembalian karena kita butuh jumlah buku dan id buku
        $peminjaman = $this->Peminjaman_model->getRow($id_peminjaman);
        // jumlah buku baru
        $jumlah = $peminjaman->jumlah + 1;
        $id_buku = $peminjaman->id_buku;
        // update jumlah buku baru
        $this->Peminjaman_model->updateBuku($jumlah, $id_buku);
        $this->session->set_flashdata('berhasil', 'Buku Berhasil Dekembalikan');
        redirect('peminjaman');
    }

    public function reset($id_peminjaman)
    {
        $this->Peminjaman_model->reset($id_peminjaman);
        $peminjaman = $this->Peminjaman_model->getRow($id_peminjaman);
        $jumlah = $peminjaman->jumlah - 1;
        $id_buku = $peminjaman->id_buku;
        $this->Peminjaman_model->updateBuku($jumlah, $id_buku);
        $this->session->set_flashdata('berhasil', 'Data Berhasil Direset');
        redirect('peminjaman');
    }
}
