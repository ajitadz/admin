<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		//$this->session->set_userdata('isLogged', FALSE);

		if(($this->session->userdata('userid') == null) || ($this->session->userdata('userid') == ""))
		{}
		else
		{
			redirect(base_url().'admin');
		}			
	}

	public function index()
	{
		$this->load->view('LOGIN/login');
	}
	public function loginform()
	{
		$logusername=$this->input->post('login_username');
		$logpassword=$this->input->post('login_password');
		$logcode=$this->input->post('login_code');

		if($logusername == "" || $logpassword == "" || $logcode == "")
		{
			$resarray["iserror"] = TRUE;
			$resarray["message"] = "Please fill all fields";
		}
		else
		{
			$this->adminmodel->loginformmodel($logusername,$logpassword,$logcode);
		}
	}
}
