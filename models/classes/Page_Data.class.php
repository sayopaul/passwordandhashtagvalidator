<?php
/* basic class to provide the various variables for the page template in views/page.php */

	class Page_Data {
		public $css;
		public $js;
		//method for automatically adding stylesheets
		public function addCSS($css) {
			$this->css.= "<link rel='stylesheet' type='text/css' href='$css.css' >";
		}
		//method for automatically adding js scripts
		public function addJS ($js) {
			$this->js .= "<script src='js/$js.js' ></script>";
		}

		
	}




?>