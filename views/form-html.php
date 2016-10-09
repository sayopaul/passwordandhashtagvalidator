<?php
//returns the html form for the password tester
	return "
		<form method='post' action='index.php?page=form' class='innerBox'>


			
				<h5 style='text-align:center; margin-bottom:30px;'> Please Set a Strong Password </h5>
				
					 <label for='password' > Your Password</label>
						<input class='validate' type='password' name='password' id='password' placeholder='Please enter your password' required/> 
					
						<input type='submit' name='submitted' value='REGISTER' class='btn waves-effect'>
			





		</form>




	";
?>
