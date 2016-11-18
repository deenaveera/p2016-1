<?php
	class Backend_Contoller extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
		}

		public function test() {
			var_dump("from Admin_Parent");
		}
	}

	class Frontend_Contoller extends CI_Controller {

		public function __construct() {
			parent::__construct();
		}

		public function test(){
			 var_dump("from User_Parent");
		}
	}

?>