<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminuser extends Frontend_Contoller {
	
	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		exit('123');
		$this->load_frontend_template();
	}
	public function add()
	{
		exit('ADD');
		$this->load_frontend_template();
	}
	public function edit()
	{
		exit('edit');
		$this->load_frontend_template();
	}
}
