<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get()
    {
        $this->db->order_by('id_user', 'DESC');
        return $this->db->get('user')->result();
    }

    public function insert()
    {

        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level')
        ];
        $this->db->insert('user', $data);
    }

    public function getRow($id_user)
    {
        $where = ['id_user' => $id_user];
        return $this->db->get_where('user', $where)->row();
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level')
        ];
        $id_user = $this->input->post('id_user');
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }

    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
}
