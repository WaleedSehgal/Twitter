<?php

	$allowedExts = array("jpg", "jpeg", "gif", "png");	
	$name = explode(".", $_FILES["file"]["name"]);
	$extension = end($name);
	echo $_FILES["file"]["name"];
	echo $extension;
	
	if (
	(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || 
	($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg"))
	&& in_array($extension, $allowedExts))
   {
	if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	else
    {
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
		  echo $_FILES["file"]["name"] . " already exists. ";
		}
		else if($_FILES["file"]["size"] > 4194305)
		{
		  echo "File size exceeds limit 4 MB.";
		}
		else
		{
		session_start();
		include("connection.php");
		$con = connectDB();		
		$email = $_SESSION['email'];
		$record = mysql_query("SELECT * FROM users WHERE fullname = '$username'");
					
		if($record){
			$user = mysql_fetch_array($record);	
			if($user){			
			  move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/".$user['userID'].".".$extension);
			  
			  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
			  $_SESSION['picUploaded'] = true;
			  $_SESSION['proPic'] = $user['userID'].".".$extension;
			  mysql_close($con);
		  	  $_SESSION['isValidPic'] = true;
			  header("location:../reg_profilePic.php");			  
				}
			}
		}	
	}
  }
else
  {
	  $_SESSION['isValidPic'] = false;
	  header("location:../reg_profilePic.php");
  }
?>