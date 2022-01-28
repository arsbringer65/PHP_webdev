<?php
	include('header.php');
				
?>				
<html>
	<center>
		<h1>Register</h1>
		<div class="account-form"> 
			<form action = "inc/register.inc.php" method = "POST">
				
			  
				
					
				Firstname:<br>
					<input id="text" type="text" name="firstname" placeholder="Firstname" required="">
					<br>
				Lastname:<br>
					<input id="text" type="text" name="lastname" placeholder="Lastname" required="">
					<br>
				Email Address:<br>
					<input id="text" type="email" name="email" placeholder="Email Address" required="">
					<br>
				Password<br>
					<input id="text" type="password" name="password" placeholder="Password" required="">
					<br>
				Retype-Password<br>
					<input id="text" type="password" name="repeat-password" placeholder="Repeat Password" required="">
					<br><br>	
					<input id= "botton" type="submit" value="Register" name="register">
			  
				</center>
			</form>
		</div>

</html>
