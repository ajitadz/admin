<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Tickets extends CI_Controller {
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
		$tickets = $this->ticketmodel->tickets('Open');
		$data['tickets'] = $tickets;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/TICKETS/new_tickets', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function view($id) {
			if($this->input->post('update'))
				{
					$date_time = date("Y-m-d H:i:s");
					$ticket_id=$this->input->post('ticket_id');
					$tick_stat=$this->input->post('tick_stat');
					$query="UPDATE help_ticket SET status='$tick_stat', close_date='$date_time' WHERE id='$ticket_id'";
		 			$this->db->query($query);
					redirect('tickets/view/'.$ticket_id, 'refresh');
				}
			if($this->input->post('submit'))
				{
					$uid='1';
					$msg=$this->input->post('message');
					$tid=$this->input->post('ticket_id');
					$date_time = date("Y-m-d H:i:s");
					$toid=$this->ticketmodel->userid($tid);
					$query="INSERT INTO  help_chat (ticket_id,from_id, to_id, date_time,message) VALUES  ('$tid','$uid','$toid','$date_time','$msg')";
		 			$this->db->query($query);
					$insertId = $this->db->insert_id();
					if($insertId)
					{
						redirect('tickets/view/'.$tid, 'refresh');
						
					}
					else
					{
						redirect('tickets/view/'.$tid, 'refresh');
					}
				}
		$tickets = $this->ticketmodel->view_ticket($id);
		$messageajax= $this->ticketmodel->messageajax($id);
		$data['tickets'] = $tickets;
		$data['messageajax'] =  $messageajax;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/TICKETS/view_tickets', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function closed() {
		$tickets = $this->ticketmodel->tickets('Closed');
		$data['tickets'] = $tickets;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/TICKETS/new_tickets', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function resolved() {
		$tickets = $this->ticketmodel->tickets('Resolved');
		$data['tickets'] = $tickets;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/TICKETS/new_tickets', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function deleted() {
		$tickets = $this->ticketmodel->tickets('Deleted');
		$data['tickets'] = $tickets;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/TICKETS/new_tickets', $data);
		$this->load->view( 'ADMIN/footer' );
	}

	
}