<?php  
class safe_box_ctrl extends CI_Controller {
	
  function index()
  {
    $this->load->helper(array('form', 'url'));
    // load library for form validation
    $this->load->library('form_validation');
    // validation rule
		$this->form_validation->set_rules('sf_type','Safe Type','trim');
		$this->form_validation->set_rules('sf_desc','Description','trim|required');
		$this->form_validation->set_rules('sf_username','Username','trim|required');
		$this->form_validation->set_rules('sf_password','Password','trim');
		$this->form_validation->set_rules('sf_addinfo','Add Info','trim');

		if($this->form_validation->run()==FALSE)
		{
			$data['error'] = 'error';
			$this->load->view('head');
			$this->load->view('addsafebox',$data);	 
			$this->load->view('footer');
		}
		
		else
		{
		if ($this->input->post('sfid')){
			$insert_data = array('sf_type' => $this->input->post('sf_type'),
								 'sf_desc' => $this->input->post('sf_desc'),
								 'sf_username' => $this->input->post('sf_username'),
								 'sf_password' => $this->input->post('sf_password'),
								 'sf_addinfo' => $this->input->post('sf_addinfo'),
								 'action_flag' => 'U',
				);
			$this->load->model('update_model');
			$this->update_model->safeboxdata_u($insert_data,$this->input->post('sfid'));
			redirect('MainPage/safe_box');
		}
		else{
			$insert_data = array('sf_type' => $this->input->post('sf_type'),
								 'sf_desc' => $this->input->post('sf_desc'),
								 'sf_username' => $this->input->post('sf_username'),
								 'sf_password' => $this->input->post('sf_password'),
								 'sf_addinfo' => $this->input->post('sf_addinfo'),
								 'action_flag' => 'I',
								 'userid' => $this->session->userdata('User')['Username']
				);
			//print_r($insert_data);
			//exit();
			$this->load->model('insert_model');
			$this->insert_model->safeboxdata($insert_data);
			redirect('MainPage/safe_box');
		}
		}
  }
}
?>