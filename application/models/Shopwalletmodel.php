<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class Shopwalletmodel extends CI_Model {
	
	function get_results($sql)
	{
		$query = $this->db->query($sql);

		if($query -> num_rows() >0)
		{
			return $query->result();
			 
		}
		else
		{
			return false;
		}

	}
	public function shopping_wallet_topup_req() {
		$sql = "SELECT `c_username`,`C_FNAME`, `sl_no`,`amount`, `bank_name`,`transfer_type`,`online_transfer_type`,`transaction_id`, `cheque_no`, `deposite_id`, `date`, `status`,`actual_date` FROM `activation_wallet_request`,`address_dtl`,bc_master where activation_wallet_request.n_id=address_dtl.n_id and activation_wallet_request.n_id=bc_master.pn_id and  status='0'";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	public function shopping_wallet_details() {
		$sql = "SELECT `c_username`,`C_FNAME`, `sl_no`,`amount`, `bank_name`,`transfer_type`,`online_transfer_type`,`transaction_id`, `cheque_no`, `deposite_id`, `date`, `status`,`actual_date`,`transaction_date` FROM `activation_wallet_request`,`address_dtl`,bc_master where activation_wallet_request.n_id=address_dtl.n_id and activation_wallet_request.n_id=bc_master.pn_id and  status<>'0'";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	
	public function user_wallet_details() {
		$sql = "SELECT `c_username`,`C_FNAME`,`n_amount`  FROM `activation_wallet_master`,`address_dtl`,bc_master where activation_wallet_master.n_id=address_dtl.n_id and activation_wallet_master.n_id=bc_master.pn_id AND n_amount<>0";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	public function customer_wallet() {
		$sql = "SELECT `c_username`,`C_FNAME`,`n_amount`  FROM `wallet_master`,`address_dtl`,bc_master where wallet_master.n_id=address_dtl.n_id and wallet_master.n_id=bc_master.pn_id AND n_amount<>0";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	
	
}