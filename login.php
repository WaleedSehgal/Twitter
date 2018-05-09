<?php

session_start();
	include("connection.php");
	$con = connectDB();
	
	
	$username = $_POST['username_inp'];
	$pass = $_POST['pass_inp'];
	
	$record = mysql_query("SELECT * FROM users WHERE fullname = '$username'");
	
	if($record){
		$user = mysql_fetch_array($record);	

		if($user){
			if($pass == $user['password'])
			{
				$_SESSION['login'] = true;	
				$_SESSION['userID'] = $user['userID'];
				
				if(isset($_POST['remember'])){
					setcookie("Twitter", $_SESSION['userID']);
					setcookie("Twitter", $_SESSION['login']);
					setcookie("Twitter", $_SESSION['password']);
					
				}
				mysql_close($con);	
				
				header("location:./header.php");
			}
			else{
				header("location:../invalidLogin.php");
			}	
		
		}
		}

  mysql_close($con);
?>