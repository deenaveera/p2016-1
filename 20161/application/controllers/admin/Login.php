<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Backend_Contoller {
	 
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/login_model');
		$this->lang->load('menu',$this->sessionLang);
    }
	
	
	public function login()
	{
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		/* Form Validation */
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('users');
		$data['page_title'] = "Gentellela Alela! | Login";
			
		/* Store the login user data into the session variable start */
		$user_temp_data = $query->result();
		$user_data = array();
		if(count($user_temp_data) > 0){
			foreach($user_temp_data as $user_result){
				$user_data = $user_result;
			}
		}
		if(isset($user_data) && !empty($user_data))
		{
			$session_user_data = array(
				'id'  => $user_data->id,
					'username'  => $user_data->username,
					'email'     => $user_data->email
				);
				$this->session->set_userdata($session_user_data);
		}
		/* Form validation false */
		if(!$this->form_validation->run() == TRUE)
		{
			
			$this->load->view('admin/login',$data);
		}
		/* Form validation true */
		else
		{
			if(count($query->result()) > 0)
			{
				redirect('admin/dashboard');
			}
			else
			{
				$this->load->view('admin/login',$data);
			}
		}
			
	}
	
	public function signup()
	{
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		$this->load->view('admin/signup');
		
	}
	
	public function register()
	{
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		/* Form Validation */
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		/* Form validation false */
		if(!$this->form_validation->run() == TRUE)
		{
		
			$this->load->view('admin/signup');
		}
		/* Form validation true */
		else
		{	
			$new_user_insert_data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))						
			);
			
			if($this->login_model->insert_data($new_user_insert_data))
			{
				$this->session->set_flashdata('success', 'User Registered Successfully');
				redirect('admin/signup');
			}
			else
			{
				$this->load->view('admin/signup');			
			}
		}
		
	}
	
	public function logout()
	{
		/* User logout functionality */
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	
	public function user_profile($id = 0)
    {
		$id = $this->session->userdata['id'];
		
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
        /* Form validation */
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
		
		/* Unique email validation start */
		$this->db->select('email');
		$email_query = $this->db->get_where('users', array('id' => $id));
		$email_result = $email_query->result();
		
		foreach($email_result as $result){
			$current_user_email = $result;
		}
		
		if($this->input->post('email') != $current_user_email->email) {
		   $is_unique =  '|is_unique[users.email]';
		} else {
		   $is_unique =  '';
		}
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'.$is_unique);
		
		/* Admin edit profile functionality */
		 if ($this->input->server('REQUEST_METHOD') === 'POST')
		 { 	
				if($this->form_validation->run() == TRUE)
				{
					$new_user_data = array(
								'first_name' => $this->input->post('first_name'),
								'last_name' => $this->input->post('last_name'),
								'username' => $this->input->post('username'),
								'email' => $this->input->post('email')
					);
					$this->login_model->update_data($new_user_data,$id);
					$this->session->set_flashdata('success', 'Admin Profile Updated Successfully');
					redirect('admin/user_profile');
				}
				
				
		 }
		/* get user details to display in the user profile page */
        $data['users'] = $this->login_model->get_row($id);
		$data['page_title'] = 'User Profile';
		
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_profile',$data);
		$this->load->view('admin/footer');		

    }
}
