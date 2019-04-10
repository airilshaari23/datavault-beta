<?php
class get_model extends CI_Model{
	public function __construct() {
	        parent::__construct();
	}
	function count_items(){
		$this->db->select('*');
		$this->db->from('userlist');
		$this->db->where('action_flag <>','D');
		$query = $this->db->get();
	    return $query->num_rows();
	}
		
	function Username($numpage,$perpage){
		$this->db->select("*");
		$this->db->from('userlist');
		$this->db->where('action_flag <>','D');
		$this->db->limit($numpage, $perpage);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function userlist_disp($userid){
		$this->db->select("*");
		$this->db->from('userlist');
		$this->db->where('id', $userid);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function user($numpage,$perpage ,$dep){
		$this->db->select("*");
		$this->db->from('userlist');
		$this->db->where('Department =', $dep);
		$this->db->limit($numpage, $perpage);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function count_safe(){
		$this->db->select('*');
		$this->db->from('safeboxlist');
		$this->db->where('action_flag <>','D');
		$this->db->where('userid',$this->session->userdata('User')['Username']);
		$query = $this->db->get();
	    return $query->num_rows();
	}

	function safebox_disp($userid,$numpage,$perpage){
		$this->db->select('id,sf_type,sf_desc');
		$this->db->from('safeboxlist');
		$this->db->where('userid',$userid);
		$this->db->where('action_flag <>','D');
		$this->db->limit($numpage, $perpage);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function safebox_edit($userid,$sfid){
		$this->db->select('*');
		$this->db->from('safeboxlist');
		$this->db->where('userid',$userid);
		$this->db->where('id',$sfid);
		$this->db->where('action_flag <>','D');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function count_contact(){
		$this->db->select('*');
		$this->db->from('contactlist');
		$this->db->where('action_flag <>','D');
		$this->db->where('userid',$this->session->userdata('User')['Username']);
		$query = $this->db->get();
	    return $query->num_rows();
	}

	function contlist_disp($userid,$numpage,$perpage){
		$this->db->select('*');
		$this->db->from('contactlist');
		$this->db->where('userid',$userid);
		$this->db->where('action_flag <>','D');
		$this->db->limit($numpage, $perpage);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}
	
	function contact_edit($userid,$conid){
		$this->db->select('*');
		$this->db->from('contactlist');
		$this->db->where('id',$conid);
		$this->db->where('userid',$userid);
		$this->db->where('action_flag <>','D');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function imgfile($userid){
		$this->db->select('*');
		$this->db->from('imagelist');
		$this->db->where('userid',$userid);
		$this->db->where('action_flag <>','D');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}

	function mscfile($userid){
		$this->db->select('*');
		$this->db->from('musiclist');
		$this->db->where('userid',$userid);
		$this->db->where('action_flag <>','D');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//exit();
		return $query->result();
	}
}
?>