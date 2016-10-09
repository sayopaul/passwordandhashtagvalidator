<?php
//the controller that connects the password class model and the form-html together
	$page= include "views/form-html.php";
	
	if (isset($_POST['submitted'])) {
		$password =strip_tags($_POST['password']) ;
		include "models/classes/Password.class.php";
		$validate = new Password($password);
		$isValid = $validate->testStrength();
		$page.=$isValid;
	}
	

	return $page;
?>