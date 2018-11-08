<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
?>







<html>
    <head>
	   <title>Confirm</title>
	 </head>
        <body>	 
	       

       <h1>Inset done successfully</h1>
       <a href="home.php">Home</a><br>
	    <a href="newspanel.php">News panel</a><br>
		 <a href="eventpanel.php">Event panel</a><br>
	    <a href="imagepanel.php">image panel</a><br>
	   
	   <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
	   
	   </body>
</html>	   




