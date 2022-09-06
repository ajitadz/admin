<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Members extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->output->set_header( 'Last-Modified:' . gmdate( 'D, d M Y H:i:s' ) . 'GMT' );
		$this->output->set_header( 'Cache-Control: no-store, no-cache, must-revalidate' );
		$this->output->set_header( 'Cache-Control: post-check=0, pre-check=0', false );
		$this->output->set_header( 'Pragma: no-cache' );
		//$this->session->set_userdata('isLogged', FALSE);	

		$this->session->set_userdata( 'cururl', $this->uri->uri_string() );

		if(($this->session->userdata('userid') == null) || ($this->session->userdata('userid') == ""))
		{
			redirect(base_url().'login');
		}
	}

	public function index() {
		$users = $this->membermodel->users();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/members', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function today_join() {
		$users = $this->membermodel->today_members();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/today_join', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function yesterday_join() {
		$users = $this->membermodel->yesterday_members();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/yesterday_join', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function today_sales() {
		$users = $this->membermodel->today_sales();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/today_sales', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function yesterday_sales() {
		$users = $this->membermodel->yesterday_sales();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/yesterday_sales', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function today_act() {
		$users = $this->membermodel->today_act();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/today_act', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function yesterday_act() {
		$users = $this->membermodel->yesterday_act();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/yesterday_act', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function total_sales() {
		$users = $this->membermodel->total_sales();
		$data['users'] = $users;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/MEMBERS/total_sales', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	
}