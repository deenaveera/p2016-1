<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Backend_Contoller {

	
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
		$this->load->model('admin/users_model');
		$this->lang->load('menu',$this->sessionLang);
		$this->load->library('session');
    }
	
	
	public function index()
    {
        $data['users'] = $this->users_model->get_users();
		//echo '<pre>'; print_r($data['users']); exit;
        $data['page_title'] = 'Users Listing';
 
        $this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/users_listing',$data);
		$this->load->view('admin/footer');
    }
	public function edit($id = 0)
    {
		$id = $this->input->get('id');
        //form validation 
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
		
		// Unique Email Validation Start // 
		$email_query = $this->db->query("SELECT EMAIL FROM users WHERE id = ".$id);
		$email_result = $email_query->result();
		
		foreach($email_result as $result){
			$current_user_email = $result;
		}
		
		if($this->input->post('email') != $current_user_email->EMAIL) {
		   $is_unique =  '|is_unique[users.email]';
		} else {
		   $is_unique =  '';
		}
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'.$is_unique);
		// Unique Email Validation End //
		
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		// Edit functionality
		 if ($this->input->server('REQUEST_METHOD') === 'POST')
		 { 	
				if(!$this->form_validation->run() == TRUE)
				{
					$update_user_data = array(
								'first_name' => $this->input->post('first_name'),
								'last_name' => $this->input->post('last_name'),
								'username' => $this->input->post('username'),
								'email' => $this->input->post('email')
					);
					$this->users_model->update_user_details($id, $update_user_data);
					$this->session->set_flashdata('success', 'User Details Updated Successfully');
					redirect('admin/users');
				}
				
		 }
		//get user details to display in the user profile page
        $data['users'] = $this->users_model->get_users($id);
		
		//echo 'users = '; echo '<pre>'; print_r($data['users']); exit;
		$data['page_title'] = 'Edit User Details';
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_edit',$data);
		$this->load->view('admin/footer');		

    }
	
	public function delete()
    {
        $id = $this->input->get('id');
        $this->users_model->delete_user($id);
		$this->session->set_flashdata('success', 'User Deleted Successfully');
		redirect('admin/users');		
    }
	
	public function add(){
		
		// Signup Form Validation
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		
		if($this->form_validation->run() == TRUE)
		{
			if($this->users_model->add_user())
			{
				$this->session->set_flashdata('success', 'User Added Successfully.');
				redirect('admin/users');
			}
			else
			{
				$this->load->view('admin/user_add');			
			}
		}
		$data['page_title'] = 'Add User';
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_add',$data);
		$this->load->view('admin/footer');
	}
	
	
}
