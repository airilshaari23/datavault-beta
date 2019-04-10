<?php
class update_model extends CI_Model{
	function __construct() {
	parent::__construct();
	}

	function create_form_u($insert_data,$userid){
		$this->db->where('id',$userid);
		$this->db->update('userlist', $insert_data);
	}

	function delete($delete){

		$this->db->where('Username',$delete);
		$this->db->delete('userlist');
	}

	function safeboxdata_u($insert_data,$sfid){
		$this->db->where('id',$sfid);
		$this->db->update('safeboxlist',$insert_data);
	}
	
	function contact_list_u($insert_data,$conid){
		$this->db->where('id',$conid);
		$this->db->update('contactlist',$insert_data);
	}

	function del_img($insert_data,$imgid){
		$this->db->where('id',$imgid);
		$this->db->update('imagelist',$insert_data);
	}
}
?>