<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Backend_Contoller {

	
	function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
		$this->load->model('admin/settings_model');
		$this->lang->load('menu',$this->sessionLang);
		$this->load->library('session');
    }
	
	public function site(){
		
		$setting_name = 'site';
		$lang = 'en';
		
		// Form Validation Start //
        $this->form_validation->set_rules('site_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('site_caption', 'Caption', 'trim|required');
		// Form Validation End //
		
		// Edit Setting Functionality //
		if(!empty($setting_name)){
			
			 if ($this->input->server('REQUEST_METHOD') === 'POST')
			 { 	
					if(!$this->form_validation->run() == TRUE)
					{
						$this->session->set_flashdata('failure', 'Site Settings Updated Failed');
					}
					else{
						$site_settings_data = array(
							'site_name' => $this->input->post('site_name'),
							'site_caption' => $this->input->post('site_caption')
						);
						$this->settings_model->update_settings($setting_name, $site_settings_data);
						$this->session->set_flashdata('success', 'Site Setting Details Updated Successfully');
						redirect('admin/setting/site/');
					}
					
			 }
		}
		
		//get site details to display in the site setting page
        $data['settings'] = $this->settings_model->get_setting_values($setting_name,$lang);
		
		$data['page_title'] = 'Site Setting';
		$this->load->view('admin/sidebar-content',$data);
		$this->load->view('admin/header');
		$this->load->view('admin/settings/site',$data);
		$this->load->view('admin/footer');
	}
}
