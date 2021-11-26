<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Kontroler untuk M & V. Memakai fungsi pada Model dan menampilkan pada Views
class Home extends CI_Controller {
	//Dieksekusi pertama kali saat Controller diakses.
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Customer');		//M_Customer
		$this->load->helper('url');			 //untuk meload helper url pada codeigniter
		$this->load->library('form_validation');//function bawaan ci yang sangat berguna, kode tersebut berguna untuk meload library form_validation dimana library tersebut berfungsi untuk memvalidasi form sebelum diproses
	}

	public function index(){
		$queryDetail = $this->M_Customer->getData(); //Mengambil data dari model
        $data = array('queryDetail' => $queryDetail);
		$this->load->view("home", $data);     //Kirim ke view
	} 

	public function halaman_tambah() {
		$this->load->view('halaman_tambah');
	}

	public function halaman_edit($id){
		$queryDetail = $this->M_Customer->editData($id);
		$data = array('queryDetail' => $queryDetail);
		$this->load->view('halaman_edit', $data);
	}

	public function fungsiTambah(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('negara','negara','required');		//Optiom
		$this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');	//Tgl
		$this->form_validation->set_rules('jk','jk','required');				//Radio btn
		$this->form_validation->set_rules('hobi','hobi','required');			//Cek boks
		
		$nama 		= $this->input->post('nama');
		$email 		= $this->input->post('email');
		$username 	= $this->input->post('username');
		$alamat 	= $this->input->post('alamat');
		$negara 	= $this->input->post('negara');
		$tgl_lahir	= $this->input->post('tgl_lahir');
		$jk 		= $this->input->post('jk');
		$hobi 		= $this->input->post('hobi');
		// $data 		= array('upload_data' => $this->upload->data());
		// $datafoto	= $this->upload->data();
		// $foto 	= $datafoto['orig_name'];
		// $config['upload_path'] = './upload/';
		// $foto = $_FILES["foto"]['name'];
		// $config['file_name'] = $foto;
		$foto = $this->input->post('foto');
		
		$ArrUpdate = array(
			'nama' 		=> $nama,
			'email' 	=> $email,
			'username'	=> $username,
			'alamat'	=> $alamat,
			'negara'	=> $negara,
			'tgl_lahir'	=> $tgl_lahir,
			'jk' 		=> $jk,
			'hobi'		=> $hobi,
			'foto'		=> $foto
		);
		// $this->load->library('upload', $foto);
		
		// 1
		if($this->form_validation->run() == FALSE){
			$this->load->view('halaman_tambah');
		}else{
			$this->M_Customer->insertData($ArrUpdate);
			$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
			redirect(base_url(''));
		}
	}
	//Sintak cek boks	
	public function multicheck(){ 
			$this->load->view('home');

			if(isset($_POST['submit'])){
				$id='id';//Pass the userid here
				$checkbox = $_POST['check']; 
				for($i=0;$i<count($checkbox);$i++){
					$hobi = $checkbox[$i];
					$this->M_Customer->multisave($id,$hobi);//Call the modal
					
				}
			}
		}
	

	public function fungsiEdit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$hobi = $this->input->post('hobi');
		//Foto
		$foto = $_FILES["foto"]['name'];
		$config['file_name'] = $foto;
		$foto = $this->input->post('foto');

		$ArrUpdate = array(
			'nama' 		=> $nama,
			'email' 	=> $email,
			'username' 	=> $username,
			'alamat' 	=> $alamat,
			'jk' 		=> $jk,
			'foto'		=> $foto,
			'hobi'		=> $hobi
		);

		$this->M_Customer->updateData($id, $ArrUpdate);
		$this->session->set_flashdata('pesan','
			<div class="alert alert-warning" role="alert">
			Data berhasil di edit!
			</div>');
		redirect(base_url(''));

	}

	public function fungsiDelete($id){
		$this->M_Customer->deleteData($id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect(base_url(''));
	}

}
