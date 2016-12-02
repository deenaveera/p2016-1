<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class template {
        var $CI;
         
        function __construct() 
        {
            $this->CI =& get_instance();
        }
		
		public function load_backend_template()
		{
			$this->CI->load->helper('url');
			$data['page_title'] = "Gentellela Alela!";
			$this->CI->load->view('admin/sidebar-content',$data);
			$this->CI->load->view('admin/header', $data);
			$this->CI->load->view('admin/content', $data);
			$this->CI->load->view('admin/footer');
		}
		
		public function load_frontend_template()
		{
			$data['site_title'] = "Gentellela Alela!";
		}
    }
?>