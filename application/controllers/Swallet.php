<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Swallet extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->output->set_header( 'Last-Modified:' . gmdate( 'D, d M Y H:i:s' ) . 'GMT' );
		$this->output->set_header( 'Cache-Control: no-store, no-cache, must-revalidate' );
		$this->output->set_header( 'Cache-Control: post-check=0, pre-check=0', false );
		$this->output->set_header( 'Pragma: no-cache' );
		//$this->session->set_userdata('isLogged', FALSE);	

		$this->session->set_userdata( 'cururl', $this->uri->uri_string() );

		if ( ( $this->session->userdata( 'userid' ) == null ) || ( $this->session->userdata( 'userid' ) == "" ) ) {
			redirect( base_url() . 'login' );
		}
	}

	public function index() {
		$customer_wallet = $this->shopwalletmodel->customer_wallet();
		$data[ 'customer_wallet' ] = $customer_wallet;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/SWALLET/swallet', $data );
		$this->load->view( 'ADMIN/footer' );
	}
}