<?php  
class contact_list_ctrl extends CI_Controller {
	
  function index()
  {
    $this->load->helper(array('form', 'url'));
    // load library for form validation
    $this->load->library('form_validation');
    // validation rule
		$this->form_validation->set_rules('c_name','Contact Name','trim|required');
		$this->form_validation->set_rules('c_phone','Contact Telephone No','trim|required');
		$this->form_validation->set_rules('c_email','Contact Email','trim');

		if($this->form_validation->run()==FALSE)
		{
			$data['error'] = 'error';
			$this->load->view('head');
			$this->load->view('addcontlist',$data);	 
			$this->load->view('footer');
		}
		else{
			if ($this->input->post('conid')){
				$insert_data = array('c_name' => $this->input->post('c_name'),
									 'c_phone' => $this->input->post('c_phone'),
									 'c_email' => $this->input->post('c_email'),
									 'action_flag' => 'U'
					);
				$this->load->model('update_model');
				$this->update_model->contact_list_u($insert_data,$this->input->post('conid'));
				redirect('MainPage/contactlist');
			}
			else{
				$insert_data = array('c_name' => $this->input->post('c_name'),
									 'c_phone' => $this->input->post('c_phone'),
									 'c_email' => $this->input->post('c_email'),
									 'action_flag' => 'I',
									 'userid' => $this->session->userdata('User')['Username']
					);
				//print_r($insert_data);
				//exit();
				$this->load->model('insert_model');
				$this->insert_model->contact_list($insert_data);
				redirect('MainPage/contactlist');
			}
		}
  }
}
?>