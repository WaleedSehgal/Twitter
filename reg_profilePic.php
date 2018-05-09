<?php session_start(); ?>
<!DOCTYPE HTML>
<head>

	<meta charset="utf-8"/>    
   	<title>Profile picture</title>
	 <link rel="stylesheet" type="text/css" href="style/reg_profilePic.css">    

</head>

<body background="Images/background home.png">

	<div id = "container">
    
        <header>
        	<div id="top_bar"></div>
            	</header>
		
        <div id="user">
					<font color="#0033FF" size="+2" face="Comic Sans MS, cursive"><?php echo "{$_SESSION['username']}! upload a cool profile pic ;) "; ?></font>
				</div>
                
		
        	<div id="steps">
        <center>
        <b><span id="about_tag"><font color="#0066CC" size="+3" face="Comic Sans MS, cursive">Profile picture</font></span></b>
        </center>
        
        </div>
              
		<section id="picture">
		
		<div id = "ask">
			Set your profile picture
		</div>

		<div id = "languages1">
			<div id = "profilePic">
				<img id="picitself" height="174px" width="212px" src= 
				<?php 
					if(isset($_SESSION['picUploaded'])){
						if($_SESSION['picUploaded']==true)
							echo "\"upload/".$_SESSION['proPic']."\"";
					}
					else if($_SESSION['gender']==1)
							echo "\"images/pro_pic_female.gif\""; 
						else
							echo "\"images/pro_pic_male.gif\""; 
										
					$_SESSION['picUploaded']=false;
				?> >
			</div>
			
			<div id="uploadphoto">		
			
				<div>
					<form action="js/upload_pic.php" method="post" enctype="multipart/form-data">
						<label for="file">Filename:</label>
						<input type="file" name="file" id="file" id="browse" /> 
						<br />
						<input id="upload" type="submit" name="submit" value="Upload" />
					</form>
				</div>				
			</div>
			
			
		</div> 
        
			<div id="lang">
				<div id = "languages2">	 
					<div id="arrow">&#9668;</div><a href ="reg_profileInfo.php" id="back"> Back</a>
				</div>	

				<div id = "languages3">
				<p>				 
					<a href ="home.php" id="skip">Skip</a> &middot 
					<input id = "save_cont" value="Save &amp; Continue" type="submit" name="Log in"
						<?php	if($_SESSION['picUploaded']==true)
								{
									header("location:../reg_profilePic.php");	
								}
								else{
									echo "type=\"hidden\"";
									}
						?> />
				</p>
				</div>
			</div>		
		</section>
		
	</div>

	<footer id = "footer">
		 <hr>
            
            <div>
                <div id="copyright">
	                <span id="greytext">Twitter &copy; 2013</span>
                    <span id="greytext">&middot;</span> 
                    <span id="lang"><a href = "#" title = "Use Twitter in another language.">English (UK)</a></span>
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