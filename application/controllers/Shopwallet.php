<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Shopwallet extends CI_Controller {
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
		$shopping_wallet_topup_req = $this->shopwalletmodel->shopping_wallet_topup_req();
		$data[ 'shopping_wallet_topup_req' ] = $shopping_wallet_topup_req;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/SHOPPING_WALLET/shopping_req', $data );
		$this->load->view( 'ADMIN/footer' );
	}
	
	public function details() {
		$shopping_wallet_topup_req = $this->shopwalletmodel->shopping_wallet_details();
		$data[ 'shopping_wallet_topup_req' ] = $shopping_wallet_topup_req;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/SHOPPING_WALLET/shopping_wallet_details', $data );
		$this->load->view( 'ADMIN/footer' );
	}
	
	public function wallet_amount()
	{
		$user_wallet_details = $this->shopwalletmodel->user_wallet_details();
		$data[ 'user_wallet_details' ] = $user_wallet_details;
		$this->load->view( 'ADMIN/header' );
		$this->load->view( 'ADMIN/SHOPPING_WALLET/wallet_amount', $data );
		$this->load->view( 'ADMIN/footer' );
	}
	
	function reject_request( $id ) {

	////UPDATE WALLET REQUEST////
	
	$reject_update_topup_request = "UPDATE activation_wallet_request SET status='2',remark='AMOUNT NOT RECEIVED OR TRANSACTION ID WRONG' WHERE sl_no='$id'";
	$this->db->query( $reject_update_topup_request );
	////UPDATE WALLET REQUEST////
		
	$sql = "SELECT `sl_no`,`amount`,`date`,`status`,`n_id` FROM `activation_wallet_request` where sl_no='$id' ";
		$query = $this->db->query( $sql );
		foreach ( $query->result() as $row_find_amount ) {
			$request_id = $row_find_amount->n_id;
		}
	$result = "SELECT C_MOBILE FROM address_dtl WHERE n_id='$request_id'";
		$mobile = $this->shopwalletmodel->get_results( $result );
		if ( $mobile ) {
			foreach ( $mobile as $row ) {
				$mobilenumbers = $row->C_MOBILE;
			}
		}
		$message  ="Your top-up request is rejected. Note: Transaction ID or Amount is wrong please verify - company";
		$template='PAYR';
		$sms=$this->adminmodel->sms( $mobilenumbers, $message,$template );

		redirect( '/shopwallet' );
		
}
	
	function approve_request( $id ) {
		$check = "SELECT * FROM activation_wallet_request WHERE sl_no='$id' and status='0'";
		$result = $this->db->query( $check );
		$cheking = $result->result();		
		if($cheking)
		{
			///FIND AMOUNT IN REQUEST////
			$find_amount = "SELECT `sl_no`,`amount`,`date`,`status`,`n_id` FROM `activation_wallet_request` where sl_no='$id' ";
			$query_find_amount = $this->db->query( $find_amount );
			foreach ( $query_find_amount->result() as $row_find_amount ) {
				$request_id = $row_find_amount->n_id;
				$net_amount = $row_find_amount->amount;
			}

			////FIND AMOUNT IN REQUEST////
			//////////////////////////////
			////FINDING CURRENT AMOUNT IN THE WALLET////
			$amount_currently_in_wallet = "SELECT n_amount FROM activation_wallet_master WHERE n_id='$request_id' ";
			$amount_currently_in_wallet_result = $this->shopwalletmodel->get_results( $amount_currently_in_wallet );
			if ( $amount_currently_in_wallet_result ) {
				$sess_array = array();
				foreach ( $amount_currently_in_wallet_result as $amount_currently_in_wallet_result_row ) {
					$currently_in_wallet = $amount_currently_in_wallet_result_row->n_amount;
				}
			}


			////FINDING CURRENT AMOUNT IN THE WALLET////

			$wallet_transferslno = 0;
			$select_transaction_no = "SELECT MAX(n_slno) n_slno FROM activation_wallet_transcation_master";
			$result_select_transaction_no = $this->shopwalletmodel->get_results( $select_transaction_no );
			if ( $result_select_transaction_no ) {
				$sess_array = array();
				foreach ( $result_select_transaction_no as $row_result_select_transaction_no ) {
					$wallet_transferslno = $row_result_select_transaction_no->n_slno;
				}
			}


			$wallet_transfer_id = 0;
			$select_transaction_id = "SELECT MAX(n_transcation_no) n_transcation_no FROM activation_wallet_transcation_master";
			$result_select_transaction_id = $this->shopwalletmodel->get_results( $select_transaction_id );
			if ( $result_select_transaction_id ) {
				$sess_array = array();
				foreach ( $result_select_transaction_id as $row_result_select_transaction_id ) {
					$wallet_transfer_id = $row_result_select_transaction_id->n_transcation_no;
				}
			}

			$transactionid = $wallet_transfer_id;
			if ( $transactionid > 0 )
				$transactionid = $transactionid + 1;
			else
				$transactionid = 1;
			$wallet_transferslno = $wallet_transferslno + 1;


			//==========CURRENT DATE AND TIME==============//
			$format = 'DATE_RFC822';
			$time = time();
			$expiredate = "";
			date_default_timezone_set( 'GMT' );
			$temp = strtotime( "+5 hours 30 minutes" );
			$currentdateandtime = date( "Y-m-d H:i:s", $temp );
			$currentdate = date( "Y-m-d", $temp );
			//==========CURRENT DATE AND TIME==============//
			$to_date = $currentdateandtime;


			$walletamount = 0;
			$walletamount_aftertranscation = 0;
			$walletamount = 0;
			$walletamount_aftertranscation = 0;

			$n_transaction_amount = $net_amount;
			$amount_beforetranscation = $currently_in_wallet;
			$n_transaction_amount = $n_transaction_amount;
			$walletamount_aftertranscation = $currently_in_wallet + $n_transaction_amount;

			$query_activation_transcation_master = "INSERT INTO activation_wallet_transcation_master (n_slno,n_transcation_no,n_from_id,n_to_id,n_accbalance_before,n_trans_amount,n_accbalance_after,d_transcation,c_trans_type,c_status) VALUES ('$wallet_transferslno','$transactionid','-1','$request_id','$amount_beforetranscation','$n_transaction_amount','$walletamount_aftertranscation','$to_date','Wallet Topup','Y')";
			$this->db->query( $query_activation_transcation_master );

			////TRANSFER AMOUNT INTO ACTIVATION WALLET ////

			$search_for_wallet = "SELECT * FROM activation_wallet_master WHERE n_id='$request_id'";
			$result_search_for_wallet = $this->shopwalletmodel->get_results( $search_for_wallet );
			if ( $result_search_for_wallet ) {

			} else {
				$insert_new_wallet_user = "INSERT INTO `activation_wallet_master` (`n_id`, `n_amount`, `D_JOIN`) VALUES ('$request_id',	0.00,	'$currentdate')";
				$this->db->query( $insert_new_wallet_user );
			}
			$query_activation_wallet_master = "UPDATE activation_wallet_master SET n_amount='$walletamount_aftertranscation' WHERE n_id='$request_id'";
			$this->db->query( $query_activation_wallet_master );
			////TRANSFER AMOUNT INTO ACTIVATION WALLET ////

			////UPDATE WALLET REQUEST////
			$update_topup_request = "UPDATE activation_wallet_request SET status='1' WHERE sl_no='$id'";
			$this->db->query( $update_topup_request );
			////UPDATE WALLET REQUEST////
			$result = "SELECT C_MOBILE FROM address_dtl WHERE n_id='$request_id'";
			$mobile = $this->shopwalletmodel->get_results( $result );
			if ( $mobile ) {
				foreach ( $mobile as $row ) {
					$mobilenumbers = $row->C_MOBILE;
				}
			}
			$message  ="Your request for ".$net_amount." is approved. Thanking you website";
			$template='PAYC';
			$sms=$this->adminmodel->sms( $mobilenumbers, $message,$template );

			redirect( '/shopwallet' );
			}
		else
		{
			redirect( '/shopwallet' );
		}

		


	}

}