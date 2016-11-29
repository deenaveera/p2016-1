<?php
	class Backend_Contoller extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			
		    $this->load->helper('language');
			$this->load->library('session');
			$this->load->database();
			
			// Site Multi Languages
			if(isset($_GET['lang']) && !empty($_GET['lang'] == 'fr')){
				
				$this->sessionLang = 'fr';
			}
			else if(isset($_GET['lang']) && !empty($_GET['lang'] == 'de')){
				
				$this->sessionLang = 'de';
			}
			else{
				$this->sessionLang = 'en';
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