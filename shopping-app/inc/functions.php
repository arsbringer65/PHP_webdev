<?php
  include('inc/conn.php');
  
  	//Customer variables
  $firstname = $_POST[firstname];
  $lastname = $_POST[lastname];
  $email = $_POST[email];
  $pwd = $_POST[password];
  
  function signup($firstname, $lastname, $email, $pwd){
    $createacc="insert into users (first_name, last_name, email, password) VALUE ('$firstname','$lastname','$email','$pwd')";
    mysqli_query($conn,$createacc);
    echo "<script>alert('Data successfully saved, You may now login!')</script>";				
    echo "<script>window.open('index.php','_self')</script>";
      }