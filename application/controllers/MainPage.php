<?php

class MainPage extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('get_model');
        $this->load->model('insert_model');
        $this->load->model('update_model');
		// load libraries for URL and form processing
		$this->load->helper(array('form', 'url'));
		// load library for form validation
		$this->load->library('form_validation');
    }
	
	function index(){
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/MainPage?x=1';
		$config['total_rows'] = $this->get_model->count_items();
		$config['per_page'] = 5;
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'per_page';
		$config['cur_tag_open'] = '&nbsp;<a class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		$result_per_page = $config['per_page'] ;
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );

		$data['record'] = $this->get_model->Username($result_per_page, $this->input->get('per_page'));	
		$this->load->view('head');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function addpage(){
		$data['record'] = $this->get_model->userlist_disp($this->input->get('usid'));
		$this->load->view('head');
		$this->load->view('addpage',$data);
		$this->load->view('footer');
	}

	function del_user () {
		$insert_data = array('action_flag' => 'D');
		$this->update_model->create_form_u($insert_data,$this->input->get('usid'));
		redirect('MainPage');
	}

	function contactlist(){
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/MainPage/contactlist?x=1';
		$config['total_rows'] = $this->get_model->count_contact();
		$config['per_page'] = 5;
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'per_page';
		$config['cur_tag_open'] = '&nbsp;<a class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		$result_per_page = $config['per_page'] ;
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );

		$data['record'] = $this->get_model->contlist_disp($this->session->userdata('User')['Username'],$result_per_page, $this->input->get('per_page'));
		$this->load->view('head');
		$this->load->view('contact_list',$data);
		$this->load->view('footer');
	}

	function add_contactlist(){
		$data['error'] = '';
		$data['record'] = $this->get_model->contact_edit($this->session->userdata('User')['Username'],$this->input->get('conid'));
		$this->load->view('head');
		$this->load->view('addcontlist',$data);	 
		$this->load->view('footer');
	}

	function del_contact(){
		$insert_data = array('action_flag' => 'D');
		$this->update_model->contact_list_u($insert_data,$this->input->get('conid'));
		redirect('MainPage/contactlist');
	}

	function safe_box(){

		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/MainPage/safe_box?x=1';
		$config['total_rows'] = $this->get_model->count_safe();
		$config['per_page'] = 5;
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'per_page';
		$config['cur_tag_open'] = '&nbsp;<a class="active">';
		$config['cur_tag_close'] = '</a>';
		$this->pagination->initialize($config);
		
		$result_per_page = $config['per_page'] ;
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );

		$data['record'] = $this->get_model->safebox_disp($this->session->userdata('User')['Username'],$result_per_page, $this->input->get('per_page'));
		$this->load->view('head');
		$this->load->view('safe_box',$data);
		$this->load->view('footer');
	}

	function disp_safebox(){
		$data['record'] = $this->get_model->safebox_edit($this->session->userdata('User')['Username'],$this->input->get('sfid'));
		$this->load->view('head');
		$this->load->view('dispsafebox',$data);	 
		$this->load->view('footer');
	}

	function add_safebox(){
		$data['error'] = '';
		$data['record'] = $this->get_model->safebox_edit($this->session->userdata('User')['Username'],$this->input->get('sfid'));
		$this->load->view('head');
		$this->load->view('addsafebox',$data);	 
		$this->load->view('footer');
	}
	
	function del_safebox(){
		$insert_data = array('action_flag' => 'D');
		$this->update_model->safeboxdata_u($insert_data,$this->input->get('sfid'));
		redirect('MainPage/safe_box');
	}

	function image_gallery(){
		//$data = array();
		if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
			//$filesCount = count($_FILES['userFiles']['name']);
			//for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

				$uploadPath = 'C:/xampp/htdocs/testdatabase/uploadimage';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				//$config['max_size']	= '100';
				//$config['max_width'] = '1024';
				//$config['max_height'] = '768';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData['file_name'] = $fileData['file_name'];
					$uploadData['create_date'] = date("Y-m-d H:i:s");
					$uploadData['modified_date'] = date("Y-m-d H:i:s");
					$uploadData['action_flag'] = 'I';
					$uploadData['userid'] = $this->session->userdata('User')['Username'];
				}
			//}
			if(!empty($uploadData)){
				//Insert files data into the database
				$this->insert_model->imglist($uploadData);
				//$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
				//$this->session->set_flashdata('statusMsg',$statusMsg);
			}
			redirect('MainPage/image_gallery');
		}
		//get files data from database
        $data['imagefile'] = $this->get_model->imgfile($this->session->userdata('User')['Username']);
        //print_r($data['imagefile']);
        //exit();
		//pass the files data to view
		$this->load->view('head');
		$this->load->view('imagegallery',$data);
		$this->load->view('footer');
	}

	function delimg(){
		$insert_data = array('action_flag' => 'D',
							 'modified_date' => date("Y-m-d H:i:s"));
		$this->update_model->del_img($insert_data,$this->input->get('imgid'));
		redirect('MainPage/image_gallery');
	}

	function music_cube(){
		$data['error'] = '';
		if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'];

				$uploadPath = 'C:/xampp/htdocs/testdatabase/uploadmusic';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'mp3|mp4';
				//$config['max_size']	= '100';
				//$config['max_width'] = '1024';
				//$config['max_height'] = '768';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData['file_name'] = $fileData['file_name'];
					$uploadData['type'] = $fileData['file_type'];
					$uploadData['create_date'] = date("Y-m-d H:i:s");
					$uploadData['action_flag'] = 'I';
					$uploadData['userid'] = $this->session->userdata('User')['Username'];
				}
				else{
					$data['error'] = 'File type is not supported';
				}
			if(!empty($uploadData)){
				$this->insert_model->msclist($uploadData);
			}
			//redirect('MainPage/music_cube');
		}
		
        $data['musicfile'] = $this->get_model->mscfile($this->session->userdata('User')['Username']);
		$this->load->view('head');
		$this->load->view('musiccube',$data);
		$this->load->view('footer');
	}
}
?>