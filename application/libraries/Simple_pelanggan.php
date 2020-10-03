<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_pelanggan
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        //load data model user
        $this->CI->load->model('pelanggan_model');
	}

	//fungsi login 
	public function login($email,$password)
	{

		$check = $this->CI->pelanggan_model->login($email,$password);
		//jika ada data user, maka tambah session login
		if($check){
			$id_pelanggan 			=$check->id_pelanggan;
			$nama_pelanggan			=$check->nama_pelanggan;
			//tambah session 
			$this->CI->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->CI->session->set_userdata('nama_pelanggan', $nama_pelanggan);
			$this->CI->session->set_userdata('email', $email);
			//redirect ke halaman admin yang di proteksi 
			redirect(base_url('dasbor'),'refresh');


		}else{
			//kalau tidak ada(userame password salah) ,maka suruh login lagi 
			$this->CI->session->set_flashdata('warning', 'username atau password salah');
			redirect(base_url('masuk'),'refresh');

		}
	}
	
	//fungsi cek login
	public function cek_login()
	{
		//memeriksa apakah session sudah atau belum , jika beum alihkan ke hlmn login
		if($this->CI->session->userdata('email') == ""){
			$this->CI->session->set_flashdata('warning', 'anda belum login');
			redirect(base_url('masuk'),'refresh');
		}
	}

	//fungsi logout 

	public function logout()
	{

		//membuang semua session yang telah di set pada saat login
		$this->CI->session->unset_userdata('id_pelanggan' );
		$this->CI->session->unset_userdata('nama_pelanggan' );
		$this->CI->session->unset_userdata('email');
		//setelah session dibuang, maka redirect login
		$this->CI->session->set_flashdata('sukses', 'anda berhasil logout');
		redirect(base_url('masuk'),'refresh');
	}
}




/* End of file Simple_pelanggan.php */
/* Location: ./application/libraries/Simple_pelanggan.php */
