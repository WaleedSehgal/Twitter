<?php
	function getProfileInfo($userID, $self){

		include("connection.php");
		$con = connectDB();		
		
		$record = mysql_query("SELECT * FROM users WHERE userID = '$userID'");
		$user = mysql_fetch_array($record);			

		if($self)
		{
			$_SESSION['username'] = $user['fname']." ".$user['surname'];
			$_SESSION['gender'] = $user['gender'];
			$_SESSION['dob'] = $user['dob'];
		
			$record = mysql_query("SELECT * FROM education WHERE userID = '$userID'");
			$user = mysql_fetch_array($record);	
		
			$_SESSION['highschool'] = $user['highschool'];
			$_SESSION['employer'] = $user['employer'];
		}
		else
		{					
			$_SESSION['personID'] = $userID; 
			$_SESSION['personName'] = $user['fname']." ".$user['surname'];
			$_SESSION['personGender'] = $user['gender'];
			$_SESSION['dob'] = $user['dob'];
		
			$record = mysql_query("SELECT * FROM education WHERE userID = '$userID'");
			$user = mysql_fetch_array($record);	
		
			$_SESSION['highschool'] =  $user['highschool'];
			$_SESSION['employer'] = $user['employer'];
		}
		
		
		//add query here for number of friends	
	}
?> 