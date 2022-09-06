<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class Membermodel extends CI_Model {
	
	public function users() {
		$sql = "SELECT c_username,pn_id,C_PAYMENT_QUALIFIED,D_PAYMENT_QUALIFIED,D_JOIN_TIME,N_REF_ID,N_INT_ID,C_FNAME,C_GENDER,C_ADDRESS1,C_ADDRESS2,C_STATE,C_DISTRICT,C_ZIP_CODE,C_CITY,C_EMAIL,C_MOBILE,C_BANK,C_BRANCH,C_ACC_NO,C_PAN,C_IFC_CODE,C_APPROVE,C_ACCOUNT_PROOF,C_PANCARD_FILE,n_left_pv,n_right_pv,n_pair_pv,user_status,C_PASSWORD FROM bc_master bm INNER JOIN address_dtl ad ON bm.pn_id=ad.n_id INNER JOIN gene gn ON bm.pn_id=gn.n_id INNER JOIN bc_login bl ON bm.c_username=bl.PC_USERNAME WHERE C_STATE<>'KERALA' AND n_pair_pv>='2500' ORDER BY n_pair_pv DESC LIMIT 2000";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function today_members() {
		date_default_timezone_set('Asia/Calcutta');
		$today = date("Y-m-d");
		$sql = "SELECT c_username,pn_id,C_PAYMENT_QUALIFIED,D_PAYMENT_QUALIFIED,D_JOIN_TIME,N_REF_ID,N_INT_ID,C_FNAME,C_GENDER,C_ADDRESS1,C_ADDRESS2,C_STATE,C_DISTRICT,C_ZIP_CODE,C_CITY,C_EMAIL,C_MOBILE,C_BANK,C_BRANCH,C_ACC_NO,C_PAN,C_IFC_CODE,C_APPROVE,C_ACCOUNT_PROOF,C_PANCARD_FILE,n_left_pv,n_right_pv,n_pair_pv,user_status,C_PASSWORD FROM bc_master bm INNER JOIN address_dtl ad ON bm.pn_id=ad.n_id INNER JOIN gene gn ON bm.pn_id=gn.n_id INNER JOIN bc_login bl ON bm.c_username=bl.PC_USERNAME WHERE D_JOIN='$today'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function yesterday_members() {
		date_default_timezone_set('Asia/Calcutta');
		$yesterday = date('Y-m-d', strtotime("-1 day"));
		$sql = "SELECT c_username,pn_id,C_PAYMENT_QUALIFIED,D_PAYMENT_QUALIFIED,D_JOIN_TIME,N_REF_ID,N_INT_ID,C_FNAME,C_GENDER,C_ADDRESS1,C_ADDRESS2,C_STATE,C_DISTRICT,C_ZIP_CODE,C_CITY,C_EMAIL,C_MOBILE,C_BANK,C_BRANCH,C_ACC_NO,C_PAN,C_IFC_CODE,C_APPROVE,C_ACCOUNT_PROOF,C_PANCARD_FILE,n_left_pv,n_right_pv,n_pair_pv,user_status,C_PASSWORD FROM bc_master bm INNER JOIN address_dtl ad ON bm.pn_id=ad.n_id INNER JOIN gene gn ON bm.pn_id=gn.n_id INNER JOIN bc_login bl ON bm.c_username=bl.PC_USERNAME WHERE D_JOIN='$yesterday'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	
	public function today_sales() {
		date_default_timezone_set('Asia/Calcutta');
		$today = date("Y-m-d");
		$sql = "SELECT c_username,awr.n_id,amount,C_FNAME,date,transaction_date FROM activation_wallet_request awr INNER JOIN address_dtl ad ON awr.n_id=ad.n_id INNER JOIN bc_master bm ON awr.n_id=bm.pn_id WHERE actual_date='$today' AND status='1'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function yesterday_sales() {
		date_default_timezone_set('Asia/Calcutta');
		$yesterday = date('Y-m-d', strtotime("-1 day"));
		$sql = "SELECT c_username,awr.n_id,amount,C_FNAME,date,transaction_date FROM activation_wallet_request awr INNER JOIN address_dtl ad ON awr.n_id=ad.n_id INNER JOIN bc_master bm ON awr.n_id=bm.pn_id WHERE actual_date='$yesterday' AND status='1'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	
	public function today_act() {
		date_default_timezone_set('Asia/Calcutta');
		$today = date("Y-m-d");
		$sql = "SELECT c_username,am.n_id,c_product_name,n_amount,C_FNAME,d_activation,N_PV FROM activation_master am INNER JOIN address_dtl ad ON am.n_id=ad.n_id INNER JOIN bc_master bm ON am.n_id=bm.pn_id WHERE d_activation='$today'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function yesterday_act() {
		date_default_timezone_set('Asia/Calcutta');
		$yesterday = date('Y-m-d', strtotime("-1 day"));
		$sql = "SELECT c_username,am.n_id,c_product_name,n_amount,C_FNAME,d_activation,N_PV FROM activation_master am INNER JOIN address_dtl ad ON am.n_id=ad.n_id INNER JOIN bc_master bm ON am.n_id=bm.pn_id WHERE d_activation='$yesterday'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function total_sales() {
		$sql = "SELECT c_username,am.n_id,c_product_name,n_amount,C_FNAME,d_activation,N_PV FROM activation_master am INNER JOIN address_dtl ad ON am.n_id=ad.n_id INNER JOIN bc_master bm ON am.n_id=bm.pn_id WHERE n_amount<>'0'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	
	public function getrank($matchedbv){
	
	if ( $matchedbv < 500 ) {
		$rankimg = "active.png";
		$rank = "Smart+";
		$max_pv = 1500;
	}
	elseif ( $matchedbv >= 500 && $matchedbv < 1000 ) {
		$rankimg = "riser.png";
		$rank = "Riser+";
		$max_pv = 1500;
	}
	elseif ( $matchedbv >= 1000 && $matchedbv < 2500 ) {
		$rankimg = "rider.png";
		$rank = "Rider+";
		$max_pv = 1500;
	}
	elseif ( $matchedbv >= 2500 && $matchedbv < 5000 ) {
		$rankimg = "star.png";
		$rank = "Star+";
		$max_pv = 2500;
	}
	elseif ( $matchedbv >= 5000 && $matchedbv < 10000 ) {
		$rankimg = "ruby.png";
		$rank = "Ruby+";
		$max_pv = 3000;
	}
	elseif ( $matchedbv >= 10000 && $matchedbv < 25000 ) {
		$rankimg = "pearl.png";
		$rank = "Pearl+";
		$max_pv = 5000;
	}
	elseif ( $matchedbv >= 25000 && $matchedbv < 50000 ) {
		$rankimg = "garnet.png";
		$rank = "Garnet+";
		$max_pv = 7000;
	}
	elseif ( $matchedbv >= 50000 && $matchedbv < 100000 ) {
		$rankimg = "sapphire.png";
		$rank = "Sapphire+";
		$max_pv = 8000;
	}
	elseif ( $matchedbv >= 100000 && $matchedbv < 250000 ) {
		$rankimg = "diamond.png";
		$rank = "Diamond+";
		$max_pv = 9000;
	}
	elseif ( $matchedbv >= 250000 && $matchedbv < 500000 ) {
		$rankimg = "double diamond.png";
		$rank = "Double Diamond+";
		$max_pv = 10000;
	}
	elseif ( $matchedbv >= 500000 && $matchedbv < 1000000 ) {
		$rankimg = "triple diamond.png";
		$rank = "Tripple Diamond+";
		$max_pv = 12000;
	}
	elseif ( $matchedbv >= 1000000 && $matchedbv < 5000000 ) {
		$rankimg = "roayal diamond.png";
		$rank = "Royal Diamond+";
		$max_pv = 15000;
	}
	elseif ( $matchedbv >= 5000000 && $matchedbv < 10000000 ) {
		$rankimg = "crown diamond.png";
		$rank = "Crown Diamond+";
		$max_pv = 20000;
	}
	elseif ( $matchedbv >= 10000000) {
		$rankimg = "crown ambassador.png";
		$rank = "CrownAmbassador";
		$max_pv = 25000;
	}
	$results = array(); 
	$results[] = array(
                'rank' => $rank,
                'rankimg' => $rankimg,
				'ceiling' => $max_pv
            );
		return $results;
		//echo $rank;
}
	
}