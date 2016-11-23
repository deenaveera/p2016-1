<?php
	class Backend_Contoller extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			
		    $this->load->helper('language');
			$this->load->library('session');
			$this->load->database();
			
			// Site Multi Languages
			if(isset($_GET['lang']) && !empty($_GET['lang'] == 'french')){
				
				$this->sessionLang = 'french';
			}
			else if(isset($_GET['lang']) && !empty($_GET['lang'] == 'german')){
				
				$this->sessionLang = 'german';
			}
			else{
				$this->sessionLang = 'english';
			}
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