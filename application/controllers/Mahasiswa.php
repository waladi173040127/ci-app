<?php 

class Mahasiswa extends CI_Controller{
	public function __contruct(){
		parent::__contruct();
		$this->load->model('Mahasiswa_model');
		
	}

	public function index(){

		$this->load->model('Mahasiswa_model');
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$data['judul'] = 'Daftar Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');
	}
	

}