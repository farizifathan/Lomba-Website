<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model');
	}
	//Halaman regis

	public function index()
	{
			//validasi input

		$valid = $this->form_validation;

		$valid->set_rules('nama_pelanggan','Nama Pelanggan', 'required',
			array('required'	=>	'%s Harus Diisi'));

		$valid->set_rules('email','Email', 'required|valid_email|is_unique[pelanggan.email]',
		array('required'	=>	'%s Harus Diisi',
			'valid_email'	=>	'%s tidak valid',
			'is_unique'		=>	'%s Sudah Terdaftar'));

		$valid->set_rules('password','Passowrd', 'required', 
		array('required'	=>	'%s Harus Diisi'));

		if($valid->run()===FALSE){
			//end valid 

		$data = array ('title'	=>	'Registrasi Pelanggan',
						'isi'	=>	'Registrasi/list'
					);

		$this->load->view('layout/wrapper', $data, FALSE);


	//Masuk Db
	}else{
		$i = $this->input;
		$data = array (	'status_pelanggan'			=>	'Pending',
						'nama_pelanggan'			=> $i->post ('nama_pelanggan'),
						'email'						=> $i->post ('email'),
						'password'					=> SHA1($i->post ('password')),
						'telepon'					=> $i->post ('telepon'),
						'alamat'					=> $i->post ('alamat'),
						'tanggal_daftar'			=> date('Y-m-d H:i:s')

					);
		$this->pelanggan_model->tambah($data);
		//buat session login pelanggan
		$this->session->set_userdata('email',$i->post('email'));
		$this->session->set_userdata('nama_pelanggan',$i->post('nama_pelanggan'));
		//end
		$this->session->set_flashdata('sukses', 'Registrasi Berhasil');
		redirect(base_url('registrasi/sukses'), 'refresh');


	}
	//end masuk db
	}

	//sukses login
	public function sukses()
	{
		$data = array (	'title'		=> 'Registrasi Berhasil',
						'isi'		=>	'registrasi/sukses'
					);
			$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */