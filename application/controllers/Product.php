<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Product extends CI_Controller {
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
		$products = $this->productmodel->products();
		$data['products'] = $products;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/PRODUCT/product_list', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function add() {
		$maincat = $this->productmodel->mastercat_list();
		$data['maincat'] = $maincat;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/PRODUCT/add_product',$data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function mastercat_list() {
		$mastercat_list = $this->productmodel->mastercat_list();
		$data['mastercat_list'] = $mastercat_list;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/PRODUCT/master_cat_list',$data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function childcat_list() {
		$childcat_list = $this->productmodel->childcat_list();
		$data['childcat_list'] = $childcat_list;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/PRODUCT/child_cat_list',$data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function subcat_list() {
		$subcat_list = $this->productmodel->subcat_list();
		$data['subcat_list'] = $subcat_list;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/PRODUCT/sub_cat_list',$data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function add_maincat() {
		if($this->input->post('submit'))
		{
			$this->productmodel->add_cat($this->input->post('maincategory'));
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_maincat');
			$this->load->view( 'ADMIN/footer' );
		}
		else
		{
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_maincat');
			$this->load->view( 'ADMIN/footer' );
		}
		
	}
	public function add_childcat() {
		$mastercat_list = $this->productmodel->mastercat_list();
		$data['mastercat_list'] = $mastercat_list;
		if($this->input->post('submit'))
		{
			$this->productmodel->add_childcat($this->input->post('main_cat'),$this->input->post('childcategory'));
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_childcat',$data);
			$this->load->view( 'ADMIN/footer' );
		}
		else
		{
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_childcat',$data);
			$this->load->view( 'ADMIN/footer' );
		}
		
	}
	public function add_subcat() {
		$mastercat_list = $this->productmodel->mastercat_list();
		$childcat_list = $this->productmodel->childcat_list();
		$data['mastercat_list'] = $mastercat_list;
		$data['childcat_list'] = $childcat_list;
		if($this->input->post('submit'))
		{
			$this->productmodel->add_subcat($this->input->post('main_cat'),$this->input->post('childcategory'),$this->input->post('subcategory'));
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_subcat',$data);
			$this->load->view( 'ADMIN/footer' );
		}
		else
		{
			$this->load->view( 'ADMIN/header' );
			$this->load->view( 'ADMIN/PRODUCT/add_subcat',$data);
			$this->load->view( 'ADMIN/footer' );
		}
		
	}
	
}