<?php
		//DB CONNECTION
		$dbhost = 'localhost';
      	$dbuser = 'root';
      	$dbpassword = '';
      	$dbname = 'shopping';
      	
		if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)){
			die("Failed to Connect");
			}