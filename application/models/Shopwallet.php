<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class Shopwallet extends CI_Model {
	
	public function shopping_wallet_topup_req() {
		$sql = "SELECT *  FROM activation_wallet_request WHERE status='0'";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	
	
}