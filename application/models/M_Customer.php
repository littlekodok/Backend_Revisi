<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Mengatur koneksi DB. Pembuatan awal fungsi
class M_Customer extends CI_Model {

	function getData() {
		$query = $this->db->get('tb_customer');
		return $query->result();
		//_table = nama table. result() = funct untuk ambil semua data hsl query
		//Sama dengan SELECT*FROM products. Berisi data dr row
	}
	
	function insertData($data) {
		$this->db->insert('tb_customer', $data);
	}
	
	function editData($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tb_customer');
		return $query->row();
	}
	
	function updateData($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('tb_customer', $data);
	}
	
	function deleteData($id) {
		$this->db->where('id', $id);
		$this->db->delete('tb_customer');
	}
	//Cekboxs
	function multisave($id,$hobi){
		$query="insert into user_cat values($id,$hobi)";
		$this->db->query($query);
	}
}

