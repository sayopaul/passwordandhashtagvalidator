<?php
	/**
 * Short description for file
 *Submission for CodeClass "The Password Strength & Find The Hashtags" challenge 
 * Please I hope I Win :D :D . Okay, so its relatively simple . I used a basic mvc approach and did the two challenges in one file.
 *Please when reading the code, the comments might make it to look lengthier than it actually is
 * @author  Ademola Abisayo Paul <yobizzi416@gmail.com>
 */
	error_reporting( E_ALL );
	ini_set( "display_errors", 1 );

	//including the Page_Data class
	include "models/classes/Page_Data.class.php";
	//instantiating an object
	$pageData = new Page_Data ();
	$pageData->title="Password Strength Challenge";
	$pageData->addCSS('css/main');
	$pageData->addCSS('css/materialize.min');
	$pageData->addJS('jquery.min');
	$pageData->addJS('materialize.min');

	if (isset($_GET['page'])) {
		$pageToLoad=$_GET['page'];

	}
	elseif (empty($pageToLoad)) {
			$pageToLoad = "form";
		}
		$pageData->content = include "controller/$pageToLoad.php";
	
	//including the page template so that everything  finally echoes out to the browser as plain html
	$page= include "views/page.php";
	echo $page;





?>