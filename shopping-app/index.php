<?php
	include('header.php');
	
	
	$sql = "SELECT * FROM customer;";
	$result = mysqli_query($conn, $sql);
	$rescheck  = mysqli_num_rows($result);
	
	if($rescheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['first_name'] . "<br>";
		}
		
	}
	
?>