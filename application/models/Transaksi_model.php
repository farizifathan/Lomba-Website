	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


//Listing all transaksi
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();

	}

	//Listing all transaksi header
	public function kode_transaksi($kode_transaksi)
	{
		$this->db->select('transaksi.*,
						produk.nama_produk,
						produk.kode_produk');
		$this->db->from('transaksi');
		//join
		$this->db->join('produk', 'produk.id_produk = transaksi.id_produk', 'left');
		//end

		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();

	}

	//detail all transaksi
	public function detail($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();

	}
	//detail  sklugall transaksi
	public function read($slug_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('slug_transaksi', $slug_transaksi);
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();

	}

		//login transaksi
	public function login($transaksiname, $password)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where(array('transaksiname'	=> $transaksiname,
									'password'	=> SHA1($password)));
		$this->db->order_by('id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->row();

	}


	//tambah
	public function tambah($data)
	{
		$this->db->insert('transaksi', $data);
	}
	
	//delte
	public function edit($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);    
	}

	public function delete($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->delete('transaksi', $data); 
	}
}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */