<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Backend_Contoller {

	
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/user_model');
		$this->lang->load('menu',$this->sessionLang);
    }
	
	
	public function index()
    {
        $data['users'] = $this->user_model->get_rows();
        $data['page_title'] = 'Users Listing';
 
        $this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/users_listing',$data);
		$this->load->view('admin/footer');
    }
	
	public function insert()
	{
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		/* Form Validation */
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		
		/* Add User Functionality */
		if($this->form_validation->run() == TRUE)
		{
			$add_user_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))						
			);
			
			if($this->user_model->insert_data($add_user_data))
			{
				$this->session->set_flashdata('success', 'User Added Successfully.');
				redirect('admin/users');
			}
			else
			{
				$this->load->view('admin/user_form');			
			}
		}
		
		$data['page_title'] = 'Add User';
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_form',$data);
		$this->load->view('admin/footer');
	}
	
	public function update($id = 0)
	{
		/* Includes */
		$this->load->library('form_validation');
		$this->load->helper('form');
		
		/* Form Validation Start */
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		
		/* Edit User Functionality */
		if(!empty($id)){
			
			 /* Unique Email Validation Start */
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
			 
			 if ($this->input->server('REQUEST_METHOD') === 'POST')
			 { 	
					if(!$this->form_validation->run() == TRUE)
					{
						$this->session->set_flashdata('failure', 'User Details Updated Failed');
					}
					else{
						$update_user_data = array(
									'first_name' => $this->input->post('first_name'),
									'last_name' => $this->input->post('last_name'),
									'username' => $this->input->post('username'),
									'email' => $this->input->post('email'),
									'password' => md5($this->input->post('password'))
						);
						$this->user_model->update_data($update_user_data,$id);
						$this->session->set_flashdata('success', 'User Details Updated Successfully');
						redirect('admin/users');
					}
					
			 }
		}
		
		/* get user details to display in the user profile page */
        $data['users'] = $this->user_model->get_row($id);
		$data['page_title'] = 'Edit User';
		
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/user_form',$data);
		$this->load->view('admin/footer');
	}
	
	public function delete($id = 0)
    {
		/* Delete User Functionality */
        $this->user_model->delete_data($id);
		$this->session->set_flashdata('success', 'User Deleted Successfully');
		redirect('admin/users');		
    }
	
}
