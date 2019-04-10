<?php

class Select extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
 
	function index(){
		$this->load->helper(array('form'));
		$this->session->set_userdata('dep', $this->input->get('depart'));
		$this->load->view('head');
		$this->load->view('selection');
		$this->load->view('footer');
	}

}
?>
