<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

class productmodel extends CI_Model {
	
	public function products() {
		$sql = "SELECT pm.modelname as productname,pm.productdesc,pm.mrp,pm.tax,pm.landingcost,sellingprice,pm.mdate,pm.pv,pm.price,pm.mid as product_id,mc.category as master_cat,c.scategory as child_cat,sc.childcategory as sub_cat,pm.status,pm.mstock FROM productmaster pm INNER JOIN mastercategory mc ON pm.mastercategory=mc.cid INNER JOIN category c ON pm.category=c.sid INNER JOIN subcategory sc ON pm.subcategory=sc.cid";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function add_cat($cat_name) {
		$sql = "SELECT category FROM mastercategory WHERE category='$cat_name'";
		$result = $this->db->query( $sql );
		if($result->num_rows())
		{
			$this->session->set_flashdata('error', 'Category Already existing!');
			return true;
		}
		else
		{
			$dateofc=date('Y-m-d');
			$sql = "INSERT INTO mastercategory SET category='$cat_name', cdate='$dateofc'";
			if($this->db->query( $sql ))
			{
				$this->session->set_flashdata('success', 'Added Successfully!');
				return true;
			}
			else
			{
				$this->session->set_flashdata('error', 'Some issue');
			}
			
			
			
		}
	}
	public function add_childcat($cat_id,$childcatname) {
		$sql = "SELECT scategory FROM category WHERE scategory='$childcatname' AND scid='$cat_id'";
		$result = $this->db->query( $sql );
		if($result->num_rows())
		{
			$this->session->set_flashdata('error', 'Child Category Already existing!');
			return true;
		}
		else
		{
			$dateofc=date('Y-m-d');
			$sql = "INSERT INTO category SET scategory='$childcatname', scid='$cat_id', sdate='$dateofc'";
			if($this->db->query( $sql ))
			{
				$this->session->set_flashdata('success', 'Added Successfully!');
				return true;
			}
			else
			{
				$this->session->set_flashdata('error', 'Some issue');
			}
			
			
			
		}
	}
	public function add_subcat($cat_id,$childcat,$subcatname) {
		$sql = "SELECT childcategory FROM subcategory WHERE childcategory='$subcatname' AND cmid='$cat_id' AND csid='$childcat'";
		$result = $this->db->query( $sql );
		if($result->num_rows())
		{
			$this->session->set_flashdata('error', 'Child Category Already existing!');
			return true;
		}
		else
		{
			$dateofc=date('Y-m-d');
			$sql = "INSERT INTO subcategory SET childcategory='$subcatname', cmid='$cat_id',csid='$childcat', sdate='$dateofc'";
			if($this->db->query( $sql ))
			{
				$this->session->set_flashdata('success', 'Added Successfully!');
				return true;
			}
			else
			{
				$this->session->set_flashdata('error', 'Some issue');
			}
			
			
			
		}
	}
	public function mastercat_list() {
		$sql = "SELECT cid,category,mc.status,cdate,(SELECT COUNT(mastercategory) FROM productmaster WHERE mastercategory=mc.cid) AS pcount,(SELECT COUNT(scid) FROM category WHERE scid=mc.cid) AS ccount,(SELECT COUNT(cid) FROM subcategory WHERE cmid=mc.cid) AS scount FROM mastercategory mc";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	
	public function childcat_list() {
		$sql = "SELECT c.sid,c.scategory,c.status,c.sdate,(SELECT COUNT(cid) FROM subcategory WHERE csid=c.sid) AS scount,(SELECT COUNT(category) FROM productmaster WHERE category=c.sid) AS pcount FROM category c";
		$result = $this->db->query( $sql );
		return $result->result();
	}
	public function subcat_list() {
		$sql = "SELECT sc.cid,sc.childcategory,sc.status,sc.sdate,(SELECT COUNT(subcategory) FROM productmaster WHERE subcategory=sc.cid) AS pcount FROM subcategory sc";
		$result = $this->db->query( $sql );
		return $result->result();
	}
}