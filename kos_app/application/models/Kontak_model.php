<?php  
/**
* 
*/
class Kontak_model extends CI_Model
{
	public $admin			= 'admin';
	public $kontak		= 'kontak';
	public $id				= 'id_kontak'; 
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->kontak)->result();//banyak data
	}

	function ambil_data1($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->kontak)->row();
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->kontak,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->kontak);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->kontak,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->kontak)->row();
	}
}
 ?>