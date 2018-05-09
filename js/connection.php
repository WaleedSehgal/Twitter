<?php 
	function connectDB(){
		$con = mysql_connect("localhost", "root", "");
		
		if(!$con){
			die('Could not connect: '.mysql_error());						
		}
		mysql_select_db("twitter", $con);
		return $con;
	}					
?>