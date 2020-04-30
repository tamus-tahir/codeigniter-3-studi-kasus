<?php

class Home_model extends CI_Model
{
    function getNumRows()
    {
        $this->db->order_by('id_buku', "DESC");
        // num_rows() ==> akan mengembalikan berapa banyak jumlah baris data 
        return $this->db->get('buku')->num_rows();
    }

    function getPagination($limit, $start)
    {
        $this->db->order_by('id_buku', "DESC");
        // ini akan mengembalikan data buku dengan jumlah data = $limit
        return $this->db->get('buku', $limit, $start)->result();
    }

    public function getRow($id_buku)
    {
        $where = ['id_buku' => $id_buku];
        return $this->db->get_where('buku', $where)->row();
    }
}
