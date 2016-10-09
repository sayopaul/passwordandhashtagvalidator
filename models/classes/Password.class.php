<?php

class Password {
	public $password = "";
	
	
	//get the password from the form
	public function __construct($password) {
		$this->password= $password;
	}


	
	//where the main magic happens. the function uses pregex and some PHP string functions to test for the strength of the password
	public function testStrength () {

		$passworded= $this->password;
		$response="";
		//ensure that there is already a value for password
		if (isset($passworded)) {
				if (strlen($passworded) < 6 ) {
					$response .= "<section class='card-panel hoverable red lighten-1 white-text'> Please your password must be at least six letters </section>";

				}
				//check for whitespace
				if ( preg_match('/\s/',$passworded) ) {
					$response .= "<section class='card-panel hoverable red lighten-1 white-text'> Please your password must not contain any whitespace </section>";
				}
				//check for CAPS
				if( !preg_match("#[A-Z]+#", $passworded) ) {

					$response .= "<section class='card-panel hoverable red lighten-1 white-text'> Please your password must include at least one CAPITAL LETTER </section>  ";
				}
				//check for at least 1 number
				if( !preg_match("#[0-9]+#", $passworded) ) {
					$response .= "<section class='card-panel hoverable red lighten-1 white-text'> Please your password must include at least 1 number </section> ";
				}
				//check for symbol
				if( !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $passworded) ) {
					$response .= "<section class='card-panel hoverable red lighten-1 white-text'> Password must include at least one symbol ! </section> ";

							
					}
					//if there's a symbol, we still check to ensure its either $#-_or $
				if ( preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $passworded) ) {
					
						

						if ( !(strstr($passworded,"$") || strstr($passworded,"#") || strstr($passworded,"-") || strstr($passworded,"_") || strstr($passworded,"&") ) ) {

								$response.= "<section class='card-panel  hoverable red lighten-1 white-text'> Only the following symbols are allowed '$ # - _ &' </section>";

							}
							
					}
					//if there's no badnews, then its only good news! Our password is solid! 
				if (empty($response)){
						$response="<section class='card-panel hoverable green lighten-1 white-text'> Congratulations, your password is secure and has been set </section>";
					}
				return $response;


	}
}



}





?>