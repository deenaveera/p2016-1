<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends Frontend_Contoller {
	
	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		exit('123');
		$this->load_frontend_template();
	}
}
