<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('Hunian_model');
	$this->load->model('Fasilitas_model');
	$this->load->model('Member_model');
	$this->load->model('Admin_model');
	$this->load->model('Sewa_model');
	$this->load->model('Kontak_model');
	$this->load->helper(array('url'));
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() 
	{
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Member/Index');
	}

	public function info()
	{
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Member/Info',$data);

	}
	public function Profil()
	{
		$this->load->view('Admin/Profil');
	}

	public function info_member()
	{
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Member/Info_member',$data);

	}

	public function fasilitas()
	{
		$data['fasilitas'] = $this->Fasilitas_model->ambil_data();
		$this->load->view('Member/Fasilitas',$data);
	}

	public function fasilitas_member()
	{
		$data['fasilitas'] = $this->Fasilitas_model->ambil_data();
		$this->load->view('Member/Fasilitas_member',$data);
	}

	public function kontak()
	{
		$data['kontak'] = $this->Kontak_model->ambil_data();
		$this->load->view('Member/Kontak',$data);
	}

	public function kontak_member()
	{
		$data['kontak'] = $this->Kontak_model->ambil_data();
		$this->load->view('Member/Kontak_member',$data);
	}

	public function login_member()
	{
		redirect('LoginMember');
	}

	public function login_admin()
	{
		redirect('Login');
	}

	public function login_pemilik()
	{
		redirect('LoginPemilik');
	}

	public function regis()
	{
		$this->load->view('Member/Regis');
	}

	public function index_member()
	{
		$this->load->view('Member/Index_member');
	}

	public function pemesanan()
	{
		$this->load->view('Member/Pemesanan');
	}

		public function status_sewa()
	{
		$data['sewa']= $this->Sewa_model->ambil_data();
		$this->load->view('Member/Status_sewa',$data);
	}

		public function sewa()
	{
		$this->load->view('Member/Sewa');
	}

	public function logout()
    {
		$this->session->unset_userdata('logined');//hapus session userdata
		redirect("/Welcome");
    } 
}
