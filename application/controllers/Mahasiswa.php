<?php 

class Mahasiswa extends CI_Controller{
	public function __contruct(){
		parent::__contruct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
		
	}

	public function index(){

		$this->load->model('Mahasiswa_model');
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$data['judul'] = 'Daftar Mahasiswa';
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');
	}
	public function tambah(){
		$data['judul'] = 'Form Tambah Data Mahasiswa';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if( $this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		}else {
			echo "Berhasil";
		}
			
	}
	

}