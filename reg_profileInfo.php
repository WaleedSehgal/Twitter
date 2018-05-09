<?php session_start(); ?>

<!DOCTYPE HTML>
<head>
	<meta charset="utf-8"/>    
   	<title>Profile Information</title>
	<link rel="stylesheet" type="text/css" href="style/reg_profineInfo.css">    
    
</head>

<body background="Images/background home.png">
	<div id = "container">
    
        <header>
        	<div id = "top_bar">
            
				 
				<div id="user">
					<font color="#0033FF" size="+2" face="Comic Sans MS, cursive"><?php echo "Hi {$_SESSION['username']}! You are just two steps away"; ?></font>
				</div>
				
			</div>
		</header>

		<div id="steps">
        <center>
        <b><span id="about_tag"><font color="#0066CC" size="+3" face="Comic Sans MS, cursive">About</font></span></b>
        </center>
        
        </div>

		<section >
			
		
		<div id = "reg_desc">
			This will help people know about you 
		</div> 

		<div id="infoForm">
			<form name = "infoForm" method = "post" action = "reg_info.php">
				<div id = "label">
					<div>About:</div>
					
				</div>
				
				<div>
					<div>  
                                <input id="about" type="text" name="about" placeholder="about"
                                <?php if(isset($_SESSION['about']))
								echo "value = \"".$_SESSION['about']."\""; ?>/>
                                
					</div>
					
				</div>
				
				<div id = "nextStep">			 
					<a href ="reg_profilePic.php">Skip</a> &middot; <input id = "next_btn" type="submit" name="next"  value="Continue"/>		
				</div>
		
				
			</form>
        </div> 			
		
		
			</div>
		</section>
		
	</div>

	<footer id = "bottom_bar">
		 <hr>
            
            <div>
                <div id="copyright">
	                <span id="greytext">Twitter &copy; 2013</span>
                    <span id="greytext">&middot;</span> 
                    <span><a href = "#" title = "Use Twitter in another language.">English (UK)</a></span>
                </div>
                
                <div id="bottom_links">
                	<ul>
                        <a href = "#">About</a> &middot;
                        <a href = "#">Support</a> &middot;
                        <a href = "#">Terms</a> &middot;
                        <a href = "#">Privacy</a> &middot;
                        <a href = "#">Cookies</a> &middot;
                              
                    </ul>
                </div>
		
		</footer>

	
 </body>


</html>