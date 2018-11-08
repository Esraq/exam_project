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
              <legend>Event panel</legend>
            
			   <h3><b><a href="image1.php">Image1</a></h3>
                           <h3><b><a href="image2.php">Image2</a></h3>
			    
				<h3><a href="image3.php">Image3</a></h3>
				
				 <h3><b><a href="image4.php">Image4</a></h3>
                           <h3><b><a href="image5.php">Image5</a></h3>
			    
				<h3><a href="image6.php">Image6</a></h3>
				 <h3><b><a href="image7.php">Image7</a></h3>
                           <h3><b><a href="image8.php">Image8</a></h3>
			    
			
				
			  <h3><a href="home.php">Home</a></h3>

			 
			 
			  
           </fieldset>
        
            
        
		
		 
        
            
        
       
       
               


		</body>
        </html>		