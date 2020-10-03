<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	// Load Model

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model'); 
		$this->load->model('kategori_model');
		//proteksi halaman
		$this->simple_login->cek_login(); 

	}

	public function index()
	{
		$produk = $this->produk_model->listing();

		$data = array(	'title'			=> 'Data Produk',
						'produk' 	 	=>  $produk,
						'isi'			=> 'admin/produk/list'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	//Gambar
	public function gambar($id_produk)
	{
		$produk = $this->produk_model->detail($id_produk);
		$gambar = $this->produk_model->gambar($id_produk);
	//validasi input

		$valid = $this->form_validation;

		$valid->set_rules('judul_gambar','Judul Gambar', 'required',
			array('required'	=>	'%s Harus Diisi'));


		if($valid->run()){
			$config['upload_path'] 			= './assets/upload/image/';
			$config['allowed_types']		= 'gif|jpg|png|jpeg';
			$config['max_size']  			= '3000';//KB
			$config['max_width']  			= '2000';
			$config['max_height'] 			= '2000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				
			
				
			
			//end valid 

		$data = array('title'	=> 'Tambah Gambar Produk:' .$gambar->nama_produk,
					'produk'	=> $produk,
					'gambar'	=> $gambar,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/produk/gambar'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	//Masuk Db
	}else{
		 $upload_gambar = array('upload_data' => $this->upload->data());
		 
		 //create thumbnail gambar
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		//lokasi fldr thumbnail
		$config['new_image']		='./assets/upload/image/thumbs/';
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;//px
		$config['height']       	= 250;//px
		$config['thumb_marker']		=''; 

$this->load->library('image_lib', $config);

$this->image_lib->resize();

		 //end create thumbnail

		$i = $this->input;
		
		$data = array ( 'id_produk'					=> $id_produk,
						'judul_gambar'				=>$i->post('judul_gambar'),
						//disimpan nama file gambar
						'gambar'					=> $upload_gambar['upload_data']['file_name']

					);
		$this->produk_model->tambah_gambar($data);
		$this->session->set_flashdata('sukses', 'Gambar telah ditambah');
		redirect(base_url('admin/produk/gambar/' .$id_produk), 'refresh');


	}}
	//end masuk db
		$data = array('title'	=> 'Tambah Gambar Produk:' .$produk->nama_produk,
					'produk'	=> $produk,
					'gambar'	=> $gambar,
					'isi'		=> 'admin/produk/gambar'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}


 
		public function tambah()
	{
		//ambil data kategori
		$kategori = $this->kategori_model->listing();

		//validasi input

		$valid = $this->form_validation;

		$valid->set_rules('nama_produk','Nama Produk', 'required',
			array('required'	=>	'%s Harus Diisi'));

		$valid->set_rules('kode_produk','Kode Produk', 'required|is_unique[produk.kode_produk]',
			array('required'	=>	'%s Harus Diisi',
				'is_unique'		=>	'%s Kode Produk Sudah ada.Buat Kode baru'));


		if($valid->run()){
			$config['upload_path'] 			= './assets/upload/image/';
			$config['allowed_types']		= 'gif|jpg|png|jpeg';
			$config['max_size']  			= '3000';//KB
			$config['max_width']  			= '2000';
			$config['max_height'] 			= '2000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				
			
				
			
			//end valid 

		$data = array('title'	=> 'Tambah Produk',
					'kategori'	=> $kategori,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/produk/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	//Masuk Db
	}else{
		 $upload_gambar = array('upload_data' => $this->upload->data());
		 
		 //create thumbnail gambar
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		//lokasi fldr thumbnail
		$config['new_image']		='./assets/upload/image/thumbs/';
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;//px
		$config['height']       	= 250;//px
		$config['thumb_marker']		=''; 

$this->load->library('image_lib', $config);

$this->image_lib->resize();

		 //end create thumbnail

		$i = $this->input;
		//slugproduk
		$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);
		$data = array ( 'id_user'					=> $this->session->userdata('id_user'),
						'id_kategori'				=> $i->post('id_kategori'),
						'kode_produk'				=> $i->post ('kode_produk'),
						'nama_produk'				=> $i->post ('nama_produk'),
						'slug_produk'				=> $slug_produk, 
						'keterangan'				=> $i->post ('keterangan'),
						'deskripsi'					=> $i->post ('deskripsi'),
						'keywords'					=> $i->post ('keywords'),
						'harga'						=> $i->post ('harga'),
						'stok'						=> $i->post ('stok'),
						//disimpan nama file gambar
						'gambar'					=> $upload_gambar['upload_data']['file_name'],
						'berat'						=> $i->post ('berat'),
						'ukuran'					=> $i->post ('ukuran'),
						'status_produk'				=> $i->post ('status_produk'),
						'tanggal_post'				=> $i->post ('Y-m-d H:i:s')


					);
		$this->produk_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambah');
		redirect(base_url('admin/produk'), 'refresh');


	}}
	//end masuk db
		$data = array('title'	=> 'Tambah Produk',
					'kategori'	=> $kategori,
					'isi'		=> 'admin/produk/tambah'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	public function edit($id_produk)
	{
	
		$produk 	= $this->produk_model->detail($id_produk);
		//ambil data produk yg diedit
		$kategori 	= $this->kategori_model->listing();

		//ambil data kategori
		$kategori = $this->kategori_model->listing();

		//validasi input

		$valid = $this->form_validation;

		$valid->set_rules('nama_produk','Nama Produk', 'required',
			array('required'	=>	'%s Harus Diisi'));

		$valid->set_rules('kode_produk','Kode Produk', 'required',
			array('required'	=>	'%s Harus Diisi' ));


		if($valid->run()){
			//Check jika gambar di ganti
			if(! empty($_FILES['gambar']['name'])){

			$config['upload_path'] 			= './assets/upload/image/';
			$config['allowed_types']		= 'gif|jpg|png|jpeg';
			$config['max_size']  			= '3000';//KB
			$config['max_width']  			= '2000';
			$config['max_height'] 			= '2000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				
			
				
			
			//end valid 

		$data = array('title'	=> 'Edit Produk:' .$produk->nama_produk,
					'kategori'	=> $kategori,
					'produk'	=> $produk,
					'error'		=> $this->upload->display_errors(),
					'isi'		=> 'admin/produk/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	//Masuk Db
	}else{
		 $upload_gambar = array('upload_data' => $this->upload->data());
		 
		 //create thumbnail gambar
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
		//lokasi fldr thumbnail
		$config['new_image']		='./assets/upload/image/thumbs/';
		$config['create_thumb'] 	= TRUE;
		$config['maintain_ratio'] 	= TRUE;
		$config['width']         	= 250;//px
		$config['height']       	= 250;//px
		$config['thumb_marker']		=''; 

$this->load->library('image_lib', $config);

$this->image_lib->resize();

		 //end create thumbnail

		$i = $this->input;
		//slugproduk
		$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);
		$data = array ( 'id_produk'					=>$id_produk,
						 'id_user'					=>$this->session->userdata('id_user'),
						'id_kategori'				=>$i->post('id_kategori'),
						'kode_produk'				=>$i->post ('kode_produk'),
						'nama_produk'				=> $i->post ('nama_produk'),
						'slug_produk'				=> $slug_produk, 
						'keterangan'				=> $i->post ('keterangan'),
						'deskripsi'				  	=> $i->post ('deskripsi'),
						'keywords'					=> $i->post ('keywords'),
						'harga'						=> $i->post ('harga'),
						'stok'						=> $i->post ('stok'),
						//disimpan nama file gambar
						'gambar'					=> $upload_gambar['upload_data']['file_name'],
						'berat'						=> $i->post ('berat'),
						'ukuran'					=> $i->post ('ukuran'),
						'status_produk'				=> $i->post ('status_produk'),
					


					);
		$this->produk_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah Di Edit');
		redirect(base_url('admin/produk'), 'refresh');


	}}else{

		//edit produk tanpa ganti gambar

		$i = $this->input;
		//slugproduk
		$slug_produk = url_title($this->input->post('nama_produk').'-'.$this->input->post('kode_produk'), 'dash', TRUE);
		$data = array ( 'id_produk'					=>$id_produk,
						 'id_user'					=>$this->session->userdata('id_user'),
						'id_kategori'				=>$i->post('id_kategori'),
						'kode_produk'				=>$i->post ('kode_produk'),
						'nama_produk'				=> $i->post ('nama_produk'),
						'slug_produk'				=> $slug_produk, 
						'keterangan'				=> $i->post ('keterangan'),
						'deskripsi'					=> $i->post ('deskripsi'),
						'keywords'					=> $i->post ('keywords'),
						'harga'						=> $i->post ('harga'),
						'stok'						=> $i->post ('stok'),
						//disimpan nama file gambar(gambar ga di ganti)
						//disimpan nama file gambar
						//'gambar'					=> $upload_gambar['upload_data']['file_name'],
						'berat'						=> $i->post ('berat'),
						'ukuran'					=> $i->post ('ukuran'),
						'status_produk'				=> $i->post ('status_produk'),
					


					);
		$this->produk_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah Di Edit');
		redirect(base_url('admin/produk'), 'refresh');


	}}
	//end masuk db
		$data = array('title'	=> 'Edit Produk:' .$produk->nama_produk,
					'kategori'	=> $kategori,
					'produk'	=>$produk,
					'isi'		=> 'admin/produk/edit'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);




	}	
	//end masuk db
		
public function delete ($id_produk)
{
	//proses hapus gambar
	$produk= $this->produk_model->detail($id_produk);
	unlink('./assets/upload/image/'.$produk->gambar);
	unlink('./assets/upload/image/thumbs/' .$produk->gambar);
	//end proses hapus
	$data = array('id_produk'	=> $id_produk);
	$this->produk_model->delete($data);
	$this->session->set_flashdata('sukses', 'Data telah dihapus');
	redirect(base_url('admin/produk'), 'refresh');

}
public function delete_gambar ($id_produk,$id_gambar)
{
	//proses hapus gambar
	$gambar= $this->produk_model->detail_gambar($id_gambar);
	unlink('./assets/upload/image/'.$gambar->gambar);
	unlink('./assets/upload/image/thumbs/' .$gambar->gambar);
	//end proses hapus
	$data = array('id_gambar'	=> $id_gambar);
	$this->produk_model->delete_gambar($data);
	$this->session->set_flashdata('sukses', 'Data Gambar telah dihapus');
	redirect(base_url('admin/produk/gambar/' .$id_produk), 'refresh');

}	
}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */