<?php
  
 
 if(isset($_POST['register'])){
	include('conn.php');
	include('variables.php');



	if()

		

			//save to database
			$query = "INSERT INTO customer (first_name, last_name, email, password) VALUES (?, ?, ?, ?);";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$query)){
				header("Location ../register.php?=error=sqlerror");
				exit();
			}
				

				$hashpass = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "ssss", $fn, $ln, $email, $hashpass);
				mysqli_stmt_execute($stmt);
				//mysli_stmt_store_result($stmt);

				//mysqli_query($conn, $query);
			
				header("Location: ../index.php?registered_successfully");

			/*mysqli_query($conn, $query);
			
			header("Location: ../index.php?registered_successfully");*/
		}

		mysqli_stmt_close($stmt);
		mysqli_close($conn);
 }
	

		
		/*else
		{
			echo "Please enter some valid information!";
		}*/