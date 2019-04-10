<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('Username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('footer');
   }
   else
   {
     //Go to private area
	 $tmp = $this->session->userdata('User');
     redirect('Select?depart='.$tmp['Department'], 'refresh');
	 

   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('Username');
   $Department = $this->input->post('Department');

   //query the database
   $result = $this->user->login($username, $password,$Department);
 //print_r ($result) ;
 //exit();
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         //'id' => $row->id,
         'Username' => $row->Username ,
		     'Department' => $row->Department
       );

       $this->session->set_userdata('User', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>