<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class sms extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$sms = $this->adminmodel->sms();
		$message = '';
		$m1 = 0;
		$m2 = 0;
		$m3 = 0;
		$m4 = 0;
		$m5 = 0;
		$m6 = 0;
		$m7 = 0;
		$m8 = 0;
		$m9 = 0;
		$m10 = 0;
		$m11 = 0;
		if ( $sms ) {
			//$message .= 'LIA-SMS : ';
			foreach ( $sms as $row ) {
				$water_level_1 = $row->water_level_1;
				$air_flow_1 = $row->air_flow_1;
				$low_pressure_1 = $row->low_pressure_1;
				$limit_switch_1 = $row->limit_switch_1;
				$water_level_2 = $row->water_level_2;
				$air_flow_2 = $row->air_flow_2;
				$low_pressure_2 = $row->low_pressure_2;
				$limit_switch_2 = $row->limit_switch_2;
				$ground_loop = $row->ground_loop;
				$water_body_temp = $row->water_body_temp;
				$short_circuit = $row->short_circuit;
				if ( $water_level_1 == '1' ) {
					if ( $m1 == '0' ) {
						$message .= 'WL(T1), ';
					}
					$m1 = $m1 + 1;
				}
				if ( $air_flow_1 == '1' ) {
					if ( $m2 == '0' ) {
						$message .= 'AF(T1), ';
					}
					$m2 = $m2 + 1;
				}
				if ( $low_pressure_1 == '1' ) {
					if ( $m3 == '0' ) {
						$message .= 'LP(T1), ';
					}
					$m3 = $m3 + 1;
				}
				if ( $limit_switch_1 == '1' ) {
					if ( $m4 == '0' ) {
						$message .= 'LS(T1), ';
					}
					$m4 = $m4 + 1;
				}
				if ( $water_level_2 == '1' ) {
					if ( $m5 == '0' ) {
						$message .= 'WL(T2), ';
					}
					$m5 = $m5 + 1;
				}
				if ( $air_flow_2 == '1' ) {
					if ( $m6 == '0' ) {
						$message .= 'AF(T2), ';
					}
					$m6 = $m6 + 1;
				}
				if ( $low_pressure_2 == '1' ) {
					if ( $m7 == '0' ) {
						$message .= 'LP(T2), ';
					}
					$m7 = $m7 + 1;
				}
				if ( $limit_switch_2 == '1' ) {
					if ( $m8 == '0' ) {
						$message .= 'LS(T2), ';
					}
					$m8 = $m8 + 1;
				}
				if ( $ground_loop == '1' ) {
					if ( $m9 == '0' ) {
						$message .= 'GL, ';
					}
					$m9 = $m9 + 1;
				}
				if ( $water_body_temp == '1' ) {
					if ( $m10 == '0' ) {
						$message .= 'WBT, ';
					}
					$m10 = $m10 + 1;
				}
				if ( $short_circuit == '1' ) {
					if ( $m11 == '0' ) {
						$message .= 'SC, ';
					}
					$m11 = $m11 + 1;
				}
			}
			$mobile="9600394499";
			$number = $this->adminmodel->sms_details();
			foreach($number as $sms)
			{
				$mobile=$mobile.','.$sms->number;
			}
			
			if ( $message ) {
				$message .= 'mentioned criteria are needed to check. - LAKSHMI';
				echo $message;
				$this->adminmodel->smsupdate();
				$template='OTP';
				$sms=$this->adminmodel->smsajin( $mobile, $message,$template );
			}
		}


	}
}