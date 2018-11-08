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
	    <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			   <th>Date</th>
			   <th>Notice</th>
			    
	
			
			  </tr>
              <tr>
	   <?php
 include '../connection.php';
	$query = "select * from id_list";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $u= $row[0];
	    $n= $row[1];;
	
		
		

?>
          <td><?php echo $u; ?></td>
		  <td><?php  echo $n; ?></td>
		  
		   

              </tr>		

	<?php } ?>	  
		   
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
         <form action="p.php" method="post">  
         <fieldset>
              <legend>For latest notice click</legend>
             Enter name:
             <input type="text" name="date">
             Enter id:
             <input type="text" name="notice">
			  <input type="submit"><br>
			   <a href="home.php">slot1</a><br>
		      <a href="home1.php">slot2</a><br>
			    <a href="home2.php">slot3</a><br>
			  <a href="user.php">Entries</a><br>
               


			 
			  
           </fieldset>
        
            
        </form>
		
		 <form action="d.php" method="post">  
		
		 <fieldset>
              <legend>For delete select date</legend>
             Enter name:
             <input type="text" name="date">
           
			  <input type="submit">
			  
           </fieldset>
        
            
        </form>
       
       
               


		</body>
        </html>		