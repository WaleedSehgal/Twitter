<?php
	session_start();
	include("connection.php");
	$con = connectDB();
	

    $about = $_POST['about'];
	$record = mysql_query("SELECT * FROM users WHERE email = '$email'");

if($record){
		$user = mysql_fetch_array($record);	

		if($user){		
			header("location:../emailInUse.php");
		}
		else {	
			$query = "INSERT INTO About (about)
				VALUES ('$_POST[about]')";
			
			mysql_query($query,$con);
			
			$_SESSION['about'] = $_POST['about'];	
		
			mysql_close($con);	
			header("location:reg_profilePic.php");	
			echo	$_SESSION['about'];
		}
	}
	mysql_close($con);	

?>
