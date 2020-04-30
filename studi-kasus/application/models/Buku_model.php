<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{

    public function get()
    {
        $this->db->order_by('id_buku', 'DESC');
        return $this->db->get('buku')->result();
    }

    public function insert()
    {
        $url = 'buku/tambah';
        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'jumlah' => $this->input->post('jumlah'),
            'gambar'  => $this->upload($url)
        ];
        $this->db->insert('buku', $data);
    }

    public function upload($url)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 500;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect($url);
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function getRow($id_buku)
    {
        $where = ['id_buku' => $id_buku];
        return $this->db->get_where('buku', $where)->row();
    }
}
