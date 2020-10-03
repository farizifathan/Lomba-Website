<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller {

//LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
		$this->load->model('pelanggan_model');
		$this->load->model('header_transaksi_model');
		$this->load->model('transaksi_model');
		//load helper random string
		$this->load->helper('string');
	}
	//halaman belanja
	public function index()
	{
		$keranjang = $this->cart->contents();

		$data 		= array('title'		=>'Keranjang Belanja',
							'keranjang'	=>$keranjang,
							'isi'		=>'belanja/list'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	//Sukses belanja
	public function sukses()
	{
		$keranjang = $this->cart->contents();

		$data 		= array('title'		=>'Checkout Berhasil',	
							'isi'		=>'belanja/sukses'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	//checkout
	public function checkout()
	{
		 //check pelanggan login/belum
		//kondisi login
		if($this->session->userdata('email')){
			$email 			= $this->session->userdata('email');
			$nama_pelanggan	= $this->session->userdata('nama_pelanggan');
			$pelanggan 		= $this->pelanggan_model->sudah_login($email,$nama_pelanggan);

			$keranjang 		= $this->cart->contents();

				//validasi input

		$valid = $this->form_validation;

		$valid->set_rules('nama_pelanggan','Nama Pelanggan', 'required',
		array('required'	=>	'%s Harus Diisi'));

		$valid->set_rules('telepon','Nomor Telepon ', 'required',
		array('required'	=>	'%s Harus Diisi'));

		$valid->set_rules('alamat','Alamat ', 'required',
		array('required'	=>	'%s Harus Diisi'));
		

		$valid->set_rules('email','Email', 'required|valid_email',
		array('required'	=>	'%s Harus Diisi',
			'valid_email'	=>	'%s tidak valid'));

		if($valid->run()===FALSE){
			//end valid 


			$data 			= array('title'		=>'Checkout',
							'keranjang'			=>$keranjang,
							'pelanggan'			=>$pelanggan,
							'isi'				=>'belanja/checkout'
						);
			$this->load->view('layout/wrapper', $data, FALSE);
			//Masuk db
				}else{
		$i = $this->input;
		$data = array (	'id_pelanggan'				=> $pelanggan->id_pelanggan,
						'nama_pelanggan'			=> $i->post ('nama_pelanggan'),
						'email'						=> $i->post ('email'),
						'telepon'					=> $i->post ('telepon'),
						'alamat'					=> $i->post ('alamat'),
						'kode_transaksi'			=> $i->post ('kode_transaksi'),
						'tanggal_transaksi'			=> $i->post ('tanggal_transaksi'),
						'jumlah_transaksi'			=> $i->post ('jumlah_transaksi'),
						'status_bayar'				=> 'Belum',
						'tanggal_post'				=> date('Y-m-d H:i:s')

					);
		//proses masuk ke header transaksi
		$this->header_transaksi_model->tambah($data);
		//proses masuk ke tabel transaksi
		foreach($keranjang as $keranjang) { 
			$sub_total = $keranjang['price'] * $keranjang['qty'];
			$data = array(	'id_pelanggan'			=> $pelanggan->id_pelanggan,
							'kode_transaksi'		=> $i->post('kode_transaksi'),
							'id_produk'				=> $keranjang['id'],
							'harga'					=> $keranjang['price'],
							'jumlah'				=> $keranjang['qty'],
							'total_harga'			=> $sub_total,
							'tanggal_transaksi'		=> $i->post('tanggal_transaksi')

							);
			$this->transaksi_model->tambah($data);

		}
		//end proses masuk ke tabel transaksi
		//Setelah masuk ke transaksi maka keranjang = 0 /destroy
		$this->cart->destroy();
		//end destroy cart 
		$this->session->set_flashdata('sukses', 'Checkout Berhasil');
		redirect(base_url('belanja/sukses'), 'refresh');


	}
			//end db
		}else{
			//kalau belum maka registrasi
			$this->session->flashdata('sukses','Silahkan Login Atau Registrasi');
			redirect(base_url('registrasi'),'refresh');
		}
	}
	//add cart
	public function add()
	{
		//get data
		$id 			=$this->input->post('id');
		$qty			=$this->input->post('qty');
		$price			=$this->input->post('price');
		$name 			=$this->input->post('name');
		$redirect_page 	=$this->input->post('redirect_page');
		//proses memasukkan ke keranjang
		$data = array(		'id'		=>$id,
							'qty'		=>$qty,
							'price'		=>$price,
							'name'		=>$name
						);	
		$this->cart->insert($data);
		//redirect page
		redirect($redirect_page,'refresh');

	}

	//update cart
	 public function update_cart($rowid)
	 {
	 	//jika ada data row id
	 	if($rowid)
	 	{
	 		$data = array(	'rowid'	=>	$rowid,
	 						'qty'	=>	$this->input->post('qty')
	 					);
	 		$this->cart->update($data);	
	 		$this->session->set_flashdata('sukses', 'Data Keranjang Di update');
	 		redirect(base_url('belanja'),'refresh');

	 	}else{
	 		//jika ga ada row id
	 		redirect(base_url('belanja'),'refresh');
	 	}
	 }
	//remove all cart
	public function hapus($rowid='')
	{
	if($rowid){
		//hpus per item
	$this->cart->remove($rowid);
	$this->session->set_flashdata('sukses','Data Keranjang di hapus');
	redirect(base_url('belanja'),'refresh');
		}else{
	//hapussemua
	$this->cart->destroy();
	$this->session->set_flashdata('sukses','Data  semua Keranjang di hapus');
	redirect(base_url('belanja'),'refresh');
		
		}
	
	}
}

/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */