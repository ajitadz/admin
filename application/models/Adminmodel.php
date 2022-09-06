<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class Adminmodel extends CI_Model {
	public function loginformmodel( $logusername, $logpassword, $logcode  ) {
		$res = array();
		$sql = "select * from admin where C_CODE2='" . $logusername . "' and C_PWD='" . $logpassword . "' and C_CODE1='" . $logcode . "'";
		$result = $this->db->query( $sql );
		foreach ( $result->result() as $user ) {
			$userdata = array(
				'username' => $user->C_CODE2,
				'userid' => $user->N_ID,
				'usertype' => $user->C_TYPE,
				'username' => $user->C_NAME,
			);

			$this->session->set_userdata( $userdata );

			$this->savelog( 'login' );
			$this->session->set_flashdata( 'success', 'Login Success' );
			redirect( '' );
		}
		$this->session->set_flashdata( 'error', 'Somthing worng. Error!!' );
		redirect( '' );
	}
	public function savelog( $optype ) {
		$sql = "insert into admin_log set 
					operationtype = '" . $optype . "',
					loc_ipaddress = '" . mysqli_real_escape_string( gethostbyname( trim( `hostname` ) ) ) . "',
					ipaddress = '" . $this->input->ip_address() . "',
					username = '" . $this->session->userdata( 'username' ) . "'";
		$this->db->query( $sql );
	}
	public function total_report() {
		date_default_timezone_set('Asia/Calcutta');
		$today = date("Y-m-d");
		$yesterday = date('Y-m-d', strtotime("-1 day"));
		$sevenday = date('Y-m-d', strtotime("-7 days"));
		$sql = "SELECT SUM(n_amount) AS total_sales, SUM(N_PV) AS total_bv, (SELECT COUNT(pn_id) FROM bc_master) AS total_members, (SELECT COUNT(pn_id) FROM bc_master WHERE D_JOIN='$today') AS new_members, (SELECT COUNT(n_id) FROM activation_master WHERE d_activation='$today') AS today_members, (SELECT SUM(n_amount) FROM activation_master WHERE d_activation='$today') AS today_activations, (SELECT SUM(amount) FROM activation_wallet_request WHERE actual_date='$today' AND status='1') AS today_sales, (SELECT COUNT(pn_id) FROM bc_master WHERE C_TFLAG='N' AND C_AFLAG='N' AND C_PAYMENT_QUALIFIED='N') AS inactive_users, (SELECT COUNT(mid) FROM productmaster WHERE status='1') AS total_products,(SELECT COUNT(n_id) FROM help_ticket WHERE status='Open') AS total_tickets, (SELECT COUNT(n_id) FROM activation_master WHERE c_delivery_status='Pending' AND n_amount >0) AS new_orders, (SELECT SUM(n_gross_amt) FROM daily_payout_hdr) AS total_payout, (SELECT SUM(n_amount) FROM daily_payout_deduction WHERE c_type='SERV') AS total_admin,(SELECT SUM(n_amount) FROM activation_wallet_master) AS total_swallet, (SELECT SUM(n_amount) FROM daily_payout_deduction WHERE c_type='TDS') AS total_tds, (SELECT SUM(N_NET_PAYABLE) FROM daily_payout_hdr WHERE D_FROM='$yesterday') AS yesterday_payout,(SELECT COUNT(pn_id) FROM bc_master WHERE D_JOIN='$yesterday') AS y_members, (SELECT SUM(amount) FROM activation_wallet_request WHERE actual_date='$yesterday' AND status='1') AS y_sales	, (SELECT COUNT(n_id) FROM activation_master WHERE d_activation='$yesterday') AS y_a_members, (SELECT SUM(n_amount) FROM activation_master WHERE d_activation='$yesterday') AS y_activation,(SELECT SUM(n_trans_amount) FROM wallet_transcation_master WHERE c_trans_type='Bank withdrawal' AND d_transcation LIKE '$today%') AS yesterday_withdrawal,(SELECT SUM(N_NET_PAYABLE) FROM daily_payout_hdr WHERE D_FROM >='$sevenday' and D_FROM <='$today') AS seven_payout, (SELECT SUM(n_trans_amount) FROM wallet_transcation_master WHERE c_trans_type='Bank withdrawal' AND d_transcation >='$sevenday 00:00:00' and d_transcation <='$today 23:59:59') AS seven_withdrawal, (SELECT SUM(n_amount) FROM wallet_master WHERE n_amount>0 AND n_id <>'7065' ) AS total_wallet FROM bc_master bm INNER JOIN activation_master am ON bm.pn_id=am.n_id";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function rank_count() {
		$sql = "SELECT IF(n_pair_pv<2500,'1',IF(n_pair_pv>=2500 AND n_pair_pv<5000,'2',IF(n_pair_pv>=5000 AND n_pair_pv<10000,'3',IF(n_pair_pv>=10000 AND n_pair_pv<25000,'4',IF(n_pair_pv>=25000 AND n_pair_pv<50000,'5',IF(n_pair_pv>=50000 AND n_pair_pv<100000,'6',IF(n_pair_pv>=100000 AND n_pair_pv<250000,'7',IF(n_pair_pv>=250000 AND n_pair_pv<500000,'8',IF(n_pair_pv>=500000 AND n_pair_pv<1000000,'9',IF(n_pair_pv>=1000000 AND n_pair_pv<5000000,'10',IF(n_pair_pv>=5000000 AND n_pair_pv<10000000,'11',IF(n_pair_pv >=10000000,'12','0')))))))))))) AS user_rank FROM gene g INNER JOIN address_dtl ad ON g.n_id=ad.n_id WHERE n_pair_pv>0 AND C_STATE<>'KERALA'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function sms( $number, $message,$template ) {
	if($template=="OTP") //--------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PUR")//----------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="REG")//----------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PPIN")//----------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PAY")//----------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PAYC")//------------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PAYR")//--------------------------------------
	{
		$templateID="1111111111111111111";
	}
	if($template=="PAYR")
	{
		 $data = array( 'key' => '00000000000000000000000', 'route' => '1', "sender" => 'xxxxx', "number" => $number, "sms" => $message, "templateid" => $templateID );
	}
	else
	{
		 $data = array( 'key' => '000000000000000000000000', 'route' => '1', "sender" => 'xxxxx', "number" => $number, "sms" => $message, "templateid" => $templateID );
	}
    $ch = curl_init( 'http://website.ext/api?' );
    curl_setopt( $ch, CURLOPT_POST, true );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $ch );
    curl_close( $ch );
  }
	public function tickets()
	{
		$sql="SELECT COUNT(n_id) as counts FROM help_ticket WHERE status='Open'";
		$result = $this->db->query( $sql );
		$result = $result->result();
		foreach($result as $row)
		{
			return $row->counts;
		}
		
	}
	public function fund_req()
	{
		$sql="SELECT COUNT(n_id) as counts FROM activation_wallet_request WHERE status='0'";
		$result = $this->db->query( $sql );
		$result = $result->result();
		foreach($result as $row)
		{
			return $row->counts;
		}
		
	}

	
}
?>