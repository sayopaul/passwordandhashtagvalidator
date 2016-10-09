<?php
//the controller that connects the hashtag class model and the hashtag form view together
	$page= include "views/finder-form.php";
	include "models/classes/Hashtags.class.php";
		if (isset($_POST['submitted'])) {
				$text = $_POST['text'];
				$detect= new Hashtags ($text);
				$getHashtags = $detect->getHashtags();
				$page.= "<section class='card-panel hoverable'> <h5 class='teal-text center'> Tags in your post </h5> <span class='teal-text'>$getHashtags</span>";

	}
	return $page;



?>