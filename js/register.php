<?php

	session_start();
	include("connection.php");
	$con = connectDB();

	$email = $_POST['email'];
	$record = mysql_query("SELECT * FROM users WHERE email = '$email'");
				
	if($record){
		$user = mysql_fetch_array($record);	

		if($user){		
			header("location:../emailInUse.php");
		}
		else {

			
	
			$query = "INSERT INTO users (fullname, email, password)
				VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[password]')";
			
			mysql_query($query,$con);
			
			$_SESSION['email'] = $_POST['email'];	
			$_SESSION['username'] = $_POST['fullname'];	
		
			mail($_SESSION['email'], "Twitter!");
		
			mysql_close($con);	
			header("location:../reg_profileInfo.php");	
			echo	$_SESSION['email'];
		}
	}
	mysql_close($con);	
?>