<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends Frontend_Contoller {
	
	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		exit('1');
		$this->load_frontend_template();
	}
	public function add()
	{exit('2');
		$this->load_frontend_template();
	}
	public function edit()
	{exit('3');
		$this->load_frontend_template();
	}
}
