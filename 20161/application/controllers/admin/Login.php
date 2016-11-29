<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Backend_Contoller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
		$this->load->model('admin/login_model');
		$this->lang->load('menu',$this->sessionLang);
		$this->load->library('session');
    }
	
	
	public function login()
	{
			// Login Form Validation Start //
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			// Login Form Validation End //
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$query = $this->db->get('users');
			$data['page_title'] = "Gentellela Alela! | Login";
			
			// Store the login user data into the session variable start //
			$user_temp_data = $query->result();
			$user_data = array();
			if(count($user_temp_data) > 0){
				foreach($user_temp_data as $user_result){
					$user_data = $user_result;
				}
			}
			if(isset($user_data) && !empty($user_data)){
				$session_user_data = array(
					'id'  => $user_data->id,
					'username'  => $user_data->username,
					'email'     => $user_data->email
				);
				$this->session->set_userdata($session_user_data);
			}
			// Store the login user data into the session variable end //
			
			if(!$this->form_validation->run() == TRUE)
			{
				// Form validation fails
				$this->load->view('admin/login',$data);
			}
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
	
	public function signup(){
		
		$this->load->view('admin/signup');
		
	}
	
	public function register()
	{
		// Signup Form Validation
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		
		if(!$this->form_validation->run() == TRUE)
		{
		// Form validation fails
			$this->load->view('admin/signup');
		}
		
		else
		{	
			if($this->login_model->set_users())
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
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	
	public function user_profile($id = 0)
    {
		$id = $this->session->userdata['id'];
        //form validation
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
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
		
		// Edit functionality
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
					$this->login_model->update_profile($id, $new_user_data);
					$this->session->set_flashdata('success', 'Admin Profile Updated Successfully');
					redirect('admin/user_profile');
				}
				
				
		 }
		//get user details to display in the user profile page
        $data['users'] = $this->login_model->get_user_details($id);
		
		//echo 'users = '; echo '<pre>'; print_r($data['users']); exit;
		$data['page_title'] = 'User Profile';
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_profile',$data);
		$this->load->view('admin/footer');		

    }
}
