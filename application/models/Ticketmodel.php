<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class ticketmodel extends CI_Model {
	
	public function tickets($status) {
		$sql = "SELECT ht.id,ht.description,bc.c_username,ht.subject,ht.department,ht.t_date_time,ht.status,ad.C_FNAME FROM help_ticket ht INNER JOIN bc_master bc ON  ht.n_id=bc.pn_id INNER JOIN address_dtl ad ON ht.n_id=ad.n_id WHERE ht.status='$status'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function view_ticket($id) {
		$sql = "SELECT ht.id,ht.description,bc.c_username,ht.subject,ht.department,ht.t_date_time,ht.status,ad.C_FNAME,ht.image_url FROM help_ticket ht INNER JOIN bc_master bc ON  ht.n_id=bc.pn_id INNER JOIN address_dtl ad ON ht.n_id=ad.n_id WHERE ht.id='$id' ";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function messageajax($ticket_id) {
		$sql = "SELECT chat_id,ticket_id,from_id,to_id,date_time,message FROM help_chat hc INNER JOIN help_ticket ht ON hc.ticket_id=ht.id WHERE hc.ticket_id='$ticket_id'";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function userid($ticket_id) {
		$sql = "SELECT n_id FROM help_ticket WHERE id='$ticket_id'";
		$result = $this->db->query( $sql );
		$result=$result->result();
		foreach($result as $row)
		{
			return $row->n_id;
		}
	}
}