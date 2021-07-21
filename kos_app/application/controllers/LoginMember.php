<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoginMember extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

    public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true) //jika ada session maka akan ke home
		{
			redirect('Welcome/Index_member');
		}
		
		if(!$this->input->post()) //jika tidak ada input data post maka akan ke halaman login
		{
			$this->load->view('Member/Login_member');
		}
		else
		{
			$cek_login = $this->Member_model->cek_login(
				$this->input->post('email_member'),
				$this->input->post('pass_member')
				);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('logined',true);	
				$this->session->set_userdata('email_member', $cek_login->email_member);
				redirect("Welcome/Index_member");
			}
			else 
			{
	$this->session->set_flashdata('gagal', 'Email atau Password salah!!');
				redirect("/LoginMember");
			}
		}
      
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */