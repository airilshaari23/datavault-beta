<?php
class insert_model extends CI_Model{
	function __construct() {
	parent::__construct();
	}

	function create_form($insert_data){
		$this->db->insert('userlist', $insert_data);
	}

	function safeboxdata($insert_data){
		$this->db->insert('safeboxlist', $insert_data);
	}
	
	function contact_list($insert_data){
		$this->db->insert('contactlist', $insert_data);
	}

	function imglist($uploadData){
		$this->db->insert('imagelist', $uploadData);
	}
	function msclist($uploadData){
		$this->db->insert('musiclist', $uploadData);
	}
}
?>