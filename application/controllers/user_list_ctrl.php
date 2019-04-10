<?php  
class user_list_ctrl extends CI_Controller {
	
  function index()
  {
    $this->load->helper(array('form', 'url'));
    // load library for form validation
    $this->load->library('form_validation');
    // validation rule
		$this->form_validation->set_rules('Tk_Id','User Id','trim|required');
		$this->form_validation->set_rules('Tk_Name','User Name','trim|required');

		if (!$this->input->post('usid')){
		$this->form_validation->set_rules('Tk_Password','Password','trim|required');
		}
		else{
		$this->form_validation->set_rules('Tk_Password','Password','trim');
		}

		$this->form_validation->set_rules('Tk_Email','Email','trim|required');
		$this->form_validation->set_rules('Tk_Department','Department','trim|required');

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('head');
			$this->load->view('addpage');	 
			$this->load->view('footer');
		}
		else{
			if ($this->input->post('usid')){
				$insert_data = array('Username' => $this->input->post('Tk_Id'),
									 'Name' => $this->input->post('Tk_Name'),
									 //'Password' => md5($this->input->post('Tk_Password')),
									 'Email' => $this->input->post('Tk_Email'),
									 'Department' => $this->input->post('Tk_Department'),
									 'action_flag' => 'U',
									 'Date' => date("Y-m-d H:i:s")
					);
				$this->load->model('update_model');
				$this->update_model->create_form_u($insert_data,$this->input->post('usid'));
				redirect('MainPage');
			}
			else{
				$insert_data = array('Username' => $this->input->post('Tk_Id'),
									 'Name' => $this->input->post('Tk_Name'),
									 'Password' => md5($this->input->post('Tk_Password')),
									 'Email' => $this->input->post('Tk_Email'),
									 'Department' => $this->input->post('Tk_Department'),
									 'action_flag' => 'I',
									 'Date' => date("Y-m-d H:i:s")
					);
				//print_r($insert_data);
				//exit();
				$this->load->model('insert_model');
				$this->insert_model->create_form($insert_data);
				redirect('MainPage');
			}
		}
  }
}
?>