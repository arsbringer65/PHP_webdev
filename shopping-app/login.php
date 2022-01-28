<?php
				
				include('header.php');
				include('inc/login.inc.php');
				
		
?>				
<html>

				
	<div id="Register"> 
		<center>
			<h1>Log-in</h1>
			<div class = "account-form">
				<form method = "POST" action = "inc/login.inc.php">
			 
				
					Email Address:<br>
					<input id="text" type="email" name="email" placeholder="Email Address" required>
					<br>
					Password<br>
					<input id="text" type="password" name="password" placeholder="Password" required>
					<br><br>
					<input id= "botton" type="submit" value="Log-in" name= "login">				
			  
				</form>


			</div>
			
</html>
