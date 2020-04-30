<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function get()
    {
        $this->db->order_by('id_mahasiswa', 'DESC');
        return $this->db->get('mahasiswa')->result();
    }

    public function insert()
    {

        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim')
        ];
        $this->db->insert('mahasiswa', $data);
    }
}
