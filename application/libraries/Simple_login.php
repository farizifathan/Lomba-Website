<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $ci;

	public function __construct()
	{
        $this->CI =& get_instance();
        //load data model user
        $this->CI->load->model('user_model');
	}

	//fungsi login 
	public function login($username,$password)
	{

		$check = $this->CI->user_model->login($username,$password);
		//jika ada data user, maka tambah session login
		if($check){
			$id_user 		=$check->id_user;
			$nama			=$check->nama;
			$akses_level 	=$check->akses_level;
			//tambah session 
			$this->CI->session->set_userdata('id_user', $id_user);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('akses_level', $akses_level);
			//redirect ke halaman admin yang di proteksi 
			redirect(base_url('admin/dasbor'),'refresh');


		}else{
			//kalau tidak ada(userame password salah) ,maka suruh login lagi 
			$this->CI->session->set_flashdata('warning', 'username atau password salah');
			redirect(base_url('login'),'refresh');

		}
	}
	
	//fungsi cek login
	public function cek_login()
	{
		//memeriksa apakah session sudah atau belum , jika beum alihkan ke hlmn login
		if($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning', 'anda belum login');
			redirect(base_url('login'),'refresh');
		}
	}

	//fungsi logout 

	public function logout()
	{

		//membuang semua session yang telah di set pada saat login
		$this->CI->session->unset_userdata('id_user' );
		$this->CI->session->unset_userdata('nama' );
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		//setelah session dibuang, maka redirect login
		$this->CI->session->set_flashdata('sukses', 'anda berhasil logout');
		redirect(base_url('login'),'refresh');
	}
}




/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
