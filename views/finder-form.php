<?php
//returns the html form for the hashtag finder
	return "
			<form method='post' action='index.php?page=hashtags' class='innerBox'>
			<h5 style='text-align:center; margin-bottom:30px;'> New Post  </h5>
				<label for='text'> Say Something </label>
				<textarea id='text' name='text' placeholder=' #What #is #happening ?' class='materialize-textarea' required></textarea>
				
                     
				
				<input type='submit' name='submitted' value='POST' class='btn waves-effect'>



			</form>


	";



?>