<?php

class Model_keranjang_belanja extends CI_Model
{
    public function get_all()
    {
        $query = $this->db->get('tb_product');
        return $query->result();
    }
}