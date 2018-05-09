<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style/index.css">
<link rel="stylesheet" href="style/bootstrap.min.css">

<title>Twitter</title>
<script>
function redirect1(){
window.open("https://itunes.apple.com/us/app/twitter/id333903271?mt=8")
return
}

function redirect2(){
window.open("https://play.google.com/store/apps/details?id=com.twitter.android&referrer=utm_source%3Dsignin%26utm_medium%3Dtwitterdotcom%26utm_content%3Dstratos%26utm_campaign%3Dloggedout")
return
}
</script>
</head>

<body background="Images/index_background.jpg">

<?php
	
		session_start();
	
		if(isset($_COOKIE['email'])){
			$_SESSION['username'] = $_COOKIE['username'];
			header("location:home.php");
		}

	?>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<div id="main">
<img id="indexHead" src="Images/strip.jpg" />
<img id="tweety" src="Icons/twitter_small.png" />

<div id="login">
<form name="signin_form" action= "login.php" method= "post">

<br/>
    <input id='user' type="text" name="username_inp" placeholder="username">
<br/>

    <input id='pass' type= "password"  name= "pass_inp" placeholder="password">
    <br/>
    <button id="signin" name="signin_button"><font color="#FFFFFF">Sign in</font></button>
    <input id='checkbox' type="checkbox" name="remember" value="me"><br /><font id="remember" color="#999999">Remember me</font>
</form>
</div>

 <!-- Registration form start -->			
                <div id = "registration">
                    <form name = "reg_form" method = "post" onSubmit="return validateRegForm()" action = "js/register.php">
                    	<br>
                            <div><font size="4">New to Twitter?</font><font color="#666666" size="4">Sign up</font></div>
                            
                           	<input id="label1" type="text" name="fullname" placeholder="Fullname">                        
                        <br>                       
                      	
                           	<input id="label2" type="email" name="email" placeholder="Email">                        
                        
                        <br>
                        
                           	<input  id="label3" type="password" name="password" placeholder="Password">                        
                     
                        <div>
                        	<input id = "signup_btn" type="submit" name = "Sign Up" value="Sign up for Twitter"/>
                        </div>
              		</form>
                      <!-- Registration form end -->	
                      
                      <div id="mobile_app"></div>	
                      <button id="iphone_badge" onclick="redirect1()"></button>
                      <button id="android_badge" onclick="redirect2()"></button>	
</div>

</body>
</html>