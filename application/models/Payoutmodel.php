<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class Payoutmodel extends CI_Model {
	
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
	public function payoutlist() {
		$sql = "SELECT c_username, C_FNAME, D_TO,n_binary_amt,n_referal_amt,n_gross_amt,N_DEDUCTION_AMT,
			N_NET_PAYABLE,D_FROM FROM daily_payout_hdr dph INNER JOIN address_dtl ad ON dph.N_ID=ad.n_id INNER JOIN bc_master bm ON dph.N_ID = bm.pn_id";
		$result = $this->db->query( $sql );
		return $result->result();		
	}
	
	
}