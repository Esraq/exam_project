<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
?>



<html>
  <head>
    <title>welcome.php</title>
  </head>
      <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
	   <body><b>Welcome:</b><br>
	   <font color='red' size='5'>
	   <?php echo $_SESSION['email']; ?>
	   </font>
	    
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
           
         <fieldset>
              <legend>Home panel</legend>
            
			   <h3><b><a href="newspanel.php">News</a></h3>
			    <h3><a href="eventpanel.php">Event</a></h3>
				 <h3><a href="home.php">Home</a></h3>
			
				
			  

			 
			 
			  
           </fieldset>
        
            
        
		
		 
        
            
        
       
       
               


		</body>
        </html>		