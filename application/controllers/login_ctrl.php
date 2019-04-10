<?php

class login_ctrl extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	    $this->load->library('session');
	}
 
	function index(){
		$this->load->helper(array('form'));
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('footer');
	}
	function logout()
 	{
	  	$this->session->sess_destroy();
	  	$this->index();
	}
}
?>
