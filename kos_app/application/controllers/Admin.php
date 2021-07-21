<?php 
class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Admin_model');
		$this->load->helper('url');
 
	}

	/* MEMBER-REGISTRASI*/
 
	function index(){
		$data['admin'] = $this->Admin_model->ambil_data();
		$this->load->view('Admin/Admin_list',$data);
	}
 
/* ADMIN - KELOLA DATA MEMBER*/

	function data_admin()
	{
		//print_r($this->member_model->ambil_data());
		$data['admin'] = $this->Admin_model->ambil_data();
		$this->load->view('Admin/Admin_list',$data);
	}


	function delete($id)
	{
		$this->Admin_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('Admin/data_admin'));
	}

	function update($id)
	{
		$admin = $this->Admin_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Admin/update_aksi'),
			'nama'		 		=> set_value('nama',$admin->nama_admin),
			'password' 			=> set_value('password',$admin->password),
			'username' 			=> set_value('username',$admin->username),
			'status' 			=> set_value('status',$admin->status),
			'nohp' 				=> set_value('nohp',$admin->nohp),
			'alamat' 			=> set_value('alamat',$admin->alamat_admin),
			'id_admin' 			=> set_value('id_admin',$admin->id_admin),
			'button' 			=> 'Perbarui'
			);
		$this->load->view('Admin/Admin_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_admin' 		=> $this->input->post('nama'),
			'password'			=> $this->input->post('password'),
			'username' 			=> $this->input->post('username'),
			'status' 			=> $this->input->post('status'),
			'nohp' 				=> $this->input->post('nohp'),
			'alamat_admin' 		=> $this->input->post('alamat')
			);	
		$id_admin = $this->input->post('id_admin');
		$this->Admin_model->edit_data($id_admin,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('admin/data_admin');
	}

	
}

 ?>