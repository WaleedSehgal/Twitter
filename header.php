<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style/header.css">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
</head>

<body>

<div id="head">
<img src="Images/strip2.png" />

</div>

<div id="myinfo">
                <ul>					
                    <li>
                    <!--<a href="profile.php?userID=<?php echo $_SESSION['userID']; ?>&self=1"><img src="upload/<?php echo $_SESSION['userID'].".jpg"; ?>"                      
                    width="30px" height="30px"/></a></li>
                    <li>
                        <a href="profile.php?userID=<?php echo $_SESSION['userID']; ?>&self=1"><p><?php echo $_SESSION['username']; ?></p></a> -->
                    </li>
                    
                </ul>						
            </div>
            
            
<div class="bs-example">
    <div class="navbar navbar-static">
        <div class="navbar-inner">
         
         <ul class="nav pull-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
          <ul class="dropdown-menu">
                        <li><a href="js/logout.php">logout</a></li>
                    </ul>
                </li>
            </ul>
         
         </div>
           </div>
             </div>

</body>
</html>