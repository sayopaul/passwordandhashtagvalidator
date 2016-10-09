<?php
//returns the page template
	return "
		<!doctype html>
			<html>
				<head>
					<title> $pageData->title </title>
					<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
					$pageData->css
					
				</head>
				<body>
					<nav id='navBar' class='lighten-2'>
						<section class='nav-wrapper'>
								<section style='float:left;'>
									<a href='index.php?page=form'><img src='images/logo.png'/></a>

								</section>	
								<ul style='font-size:20px;'>
									<li> CHALLENGE :D by Ademola Abisayo Paul </li>

								</ul>
							
								<ul id='nav-mobile' class='right hide-on-med-and-down'>

									<li><a href='index.php?page=hashtags'> #Finder </a> </li>
									
									<li><a target='_blank' href='http://sayothechristian.com.ng/about.html'> About </a> </li>

									<li> <a target='_blank' href='http://funaabair.airviewdevs.com'> Funaab Air </a></li>


								</ul>

						</section>
					</nav>
					<section id='concon'>
						$pageData->content

					</section>

					$pageData->js
				</body>


			</html>

	";




?>