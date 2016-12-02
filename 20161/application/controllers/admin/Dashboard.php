<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Contoller {
	
	function __construct() {
        parent::__construct();
		$this->lang->load('menu',$this->sessionLang);
    }
	
	public function index()
	{
		$this->load->library('template');
		$this->template->load_backend_template();
	}
}
