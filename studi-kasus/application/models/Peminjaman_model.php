<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman_model extends CI_Model
{
    public function insert()
    {
        $data = [
            'id_buku' => $this->input->post('id_buku'),
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'status' => 'Dipinjam',
            // Untuk tanggal peminjaman kita akan mengambil tanggal dari server
            'tanggal_peminjaman' => date('Y-m-d')
        ];
        $this->db->insert('peminjaman', $data);
    }

    public function getMahasiswa($nim)
    {
        // cari nim yang mirip $nim
        $this->db->like('nim', $nim);
        // data yang ditampilkan akan dilimit 5 data saja
        $this->db->limit(5);
        return $this->db->get('mahasiswa')->result();
    }

    public function getBuku($judul)
    {
        $this->db->like('judul', $judul);
        // mengambil data buku dimana jumlah lebih besar dari 0
        $this->db->where('jumlah > 0');
        $this->db->limit(5);
        return $this->db->get('buku')->result();
    }

    public function get()
    {
        /*
            relasi tabel ==> hubungan antara tabel 
            sehingga kita bisa menggunakan data buku dan mahasiswa pada peminjaman
            join ==> (nama tabel yang ingin di join, apa yang ingin di join)
            kita tidak bisa menulis id_mahasiswa = id_mahasiswa, 
            karena sistem akan bingung ada 2 ada id_mahasiswa
            jadi dijelaskan id mahasiswa pada tabel mahasiswa = id mahasiswa pada tabel peminjaman
        */
        $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman.id_mahasiswa');
        $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
        $this->db->order_by('id_peminjaman', 'DESC');
        return $this->db->get('peminjaman')->result();
    }

    public function getRow($id_peminjaman)
    {
        $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = peminjaman.id_mahasiswa');
        $this->db->join('buku', 'buku.id_buku = peminjaman.id_buku');
        $where = ['id_peminjaman' => $id_peminjaman];
        return $this->db->get_where('peminjaman', $where)->row();
    }

    public function update()
    {
        $data = [
            'id_buku' => $this->input->post('id_buku'),
            'id_mahasiswa' => $this->input->post('id_mahasiswa'),
            'status' => 'Dipinjam',
            'tanggal_peminjaman' => date('Y-m-d')
        ];
        $id_peminjaman = $this->input->post('id_peminjaman');
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('peminjaman', $data);
    }

    public function delete($id_peminjaman)
    {
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->delete('peminjaman');
    }

    public function return($id_peminjaman)
    {
        $data = [
            'status' => 'Dikembalikan',
            'tanggal_pengembalian' => date('Y-m-d')
        ];
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('peminjaman', $data);
    }

    public function updateBuku($jumlah, $id_buku)
    {
        $data = ['jumlah' => $jumlah];
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }

    public function reset($id_peminjaman)
    {
        $data = [
            'status' => 'Dipinjam',
            'tanggal_pengembalian' => '0000-00-00'
        ];
        $this->db->where('id_peminjaman', $id_peminjaman);
        $this->db->update('peminjaman', $data);
    }
}
