<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Admin extends CI_Controller {
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
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/dashboard' );
		$this->load->view( 'ADMIN/footer' );
	}
	public function logout() {
		$this->adminmodel->savelog( 'logoff' );

		$userdata = array();
		$this->session->set_userdata( $userdata );
		$this->session->sess_destroy();
		redirect( base_url() . 'login' );
	}
	/*public function mainreport() {
		////////////////////////////////////////////////////////////////////
		$aj = '1';
		$slNo = $this->adminmodel->slNo( $aj );
		$valveSize = $this->adminmodel->valveSize( $aj );
		$slNumber = $this->adminmodel->slNumber( $aj );
		$htNumber = $this->adminmodel->htNumber( $aj );

		////////////////////////////////////////////////////////////////////
		$data[ 'valveSize' ] = $valveSize;
		$data[ 'slNumber' ] = $slNumber;
		$data[ 'htNumber' ] = $htNumber;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'REPORTS/mainreport', $data );
		$this->load->view( 'ADMIN/footer' );
	}*/
	public function dashboardajax() {
		$cur_prod = $this->adminmodel->total_report();
		$arr = $cur_prod;
		echo json_encode( $arr );
	}
	public function rankajax() {
		$cur_prod = $this->adminmodel->rank_count();
			$active=0;
			$star=0;
			$ruby=0;
			$pearl=0;
			$garnet=0;
			$sapphire=0;
			$diamond=0;
			$ddiamond=0;
			$tdiamond=0;
			$rdiamond=0;
			$cdiamond=0;
			$ambassador=0;
			
		foreach($cur_prod as $row)
		{
			if($row->user_rank=='1')
			{
				$active=$active+1;
			}
			elseif($row->user_rank=='2')
			{
				$star=$star+1;
			}
			elseif($row->user_rank=='3')
			{
				$ruby=$ruby+1;
			}
			elseif($row->user_rank=='4')
			{
				$pearl=$pearl+1;
			}
			elseif($row->user_rank=='5')
			{
				$garnet=$garnet+1;
			}
			elseif($row->user_rank=='6')
			{
				$sapphire=$sapphire+1;
			}
			elseif($row->user_rank=='7')
			{
				$diamond=$diamond+1;
			}
			elseif($row->user_rank=='8')
			{
				$ddiamond=$ddiamond+1;
			}
			elseif($row->user_rank=='9')
			{
				$tdiamond=$tdiamond+1;
			}
			elseif($row->user_rank=='10')
			{
				$rdiamond=$rdiamond+1;
			}
			elseif($row->user_rank=='11')
			{
				$cdiamond=$cdiamond+1;
			}
			elseif($row->user_rank=='12')
			{
				$ambassador=$ambassador+1;
			}
			else
			{
				
			}
		}
			$data['active']=$active;
			$data['star']=$star;
			$data['ruby']=$ruby;
			$data['pearl']=$pearl;
			$data['garnet']=$garnet;
			$data['sapphire']=$sapphire;
			$data['diamond']=$diamond;
			$data['ddiamond']=$ddiamond;
			$data['tdiamond']=$tdiamond;
			$data['rdiamond']=$rdiamond;
			$data['cdiamond']=$cdiamond;
			$data['ambassador']=$ambassador;
		$arr = $data;
		echo json_encode( $arr );
	}
	/*public function alertajax() {
		$cur_alert = $this->adminmodel->current_alert();
		$arr = $cur_alert;
		echo json_encode( $arr );
	}
	public function systemajax() {
		$machine_status = $this->adminmodel->machine_status();
		$arr = $machine_status;
		echo json_encode( $arr );
	}
	public function savemachinestatus() {
			
	if($this->input->post('start_1'))
		{
			$data['status']='start_1';
			$data['start']='start_1';
			$data['stop']='stop_1';
			$data['pause']='pause_1';
		}
		if($this->input->post('start_2'))
		{
			$data['status']='start_2';
			$data['start']='start_2';
			$data['stop']='stop_2';
			$data['pause']='pause_2';
		}
		if($this->input->post('stop_1'))
		{
			$data['status']='stop_1';
			$data['start']='start_1';
			$data['stop']='stop_1';
			$data['pause']='pause_1';
		}
		if($this->input->post('stop_2'))
		{
			$data['status']='stop_2';
			$data['start']='start_2';
			$data['stop']='stop_2';
			$data['pause']='pause_2';
		}
		if($this->input->post('pause_1'))
		{
			$data['status']='pause_1';
			$data['start']='start_1';
			$data['stop']='stop_1';
			$data['pause']='pause_1';
		}
		if($this->input->post('pause_2'))
		{
			$data['status']='pause_2';
			$data['start']='start_2';
			$data['stop']='stop_2';
			$data['pause']='pause_2';
		}
		$machine_status = $this->adminmodel->savemachinestatus($data);
		if($machine_status)
		{
		echo "Machine State Changed";
		}
		else{
			echo "Unable to change Machine state";
		}
	}
	
	public function machine_com()
	{
		$ip =   "192.168.1.31";
		exec("ping -n 1 $ip", $output, $status);
		if($status=='1')
		{
			echo 'IP Unable to Ping - Network Issue';
		}
		else
		{
			echo'Online';
		}
	}
	public function prod_report() {
		$valve_type=$this->input->post('val_type');
		$period_id=$this->input->post('period_id');
		$todate=$this->input->post('todate');
		if($valve_type='valve_1')
		{
			$table='in_valve_status_1';
		}
		else
		{
			$table='in_valve_status_2';
		}
		if($period_id=='p_today')
		{
			$curdate=date("Y-m-d");
			$report = $this->adminmodel->main_report($table,$curdate,'');
			$data['report']=$report;
		}
		elseif($period_id=='sel_date')
		{
			$fromdate=$this->input->post('fromdate');
			$report = $this->adminmodel->main_report($table,$fromdate,'');
			$data['report']=$report;
		}
		elseif($period_id=='from_to')
		{
			$fromdate=$this->input->post('fromdate');
			$report = $this->adminmodel->main_report($table,$fromdate,$todate);
			$data['report']=$report;
		}
		else
		{
			redirect('admin/mainreport', 'refresh');
		}
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'REPORTS/report_page', $data );
		$this->load->view( 'ADMIN/footer' );
		
	}
	public function smsconfig()
	{
		$report = $this->adminmodel->sms_details();
		$data['report']=$report;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'REPORTS/sms_config', $data);
		$this->load->view( 'ADMIN/footer' );
	}
	public function sms_add()
	{
		if($this->input->post('name') and $this->input->post('number'))
		{
			$name=$this->input->post('name');
			$number = $this->input->post('number');
			$sms = $this->adminmodel->sms_add($name,$number);
			if($sms)
			{
				redirect('admin/smsconfig', 'refresh');
			}
			else
			{
				redirect('admin/smsconfig', 'refresh');
			}
		}
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'REPORTS/sms_add');
		$this->load->view( 'ADMIN/footer' );
	}
	public function sms_del()
	{
		$id= $this->uri->segment('3');
		$sms = $this->adminmodel->sms_del($id);
		if($sms)
		{
			redirect('admin/smsconfig', 'refresh');
		}
	}*/
}