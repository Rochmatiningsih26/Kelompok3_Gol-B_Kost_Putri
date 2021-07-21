<?php 
/**
* 
*/
class Admin_model extends CI_Model
{
	public $admin			= 'admin';
	public $id				= 'id_admin';
	public $order			= 'ASC';
	public $username 		= 'username';

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
		return $this->db->get($this->admin)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->admin,$data);
	}

	function ambil_data1($email)
	{
		$this->db->where($this->username,$username);
		return $this->db->get($this->admin)->row();
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->admin);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->admin,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->admin)->row();
	}




		
}
?>