
<?php

session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
?>






<html>
  <head>
    <title>Viewing all the users</title>
	  <style type='text/css'>
      body{
	  
	  background:url('eisty.jpg');background-repeat:no-repeat;background-size:100% 100%;
	  
	  }	  
	  </style>
  </head>
     <body>
          <center><h1>All user information</h1></center>
		  
		
		   <table width='800' align='center' border='5'>
		      <tr bgcolor='yellow'>
			   <th>name</th>
			   <th>email</th>
			    <th>phone</th>
				<th>nationality</th>
				
			  </tr>
              <tr>
<?php
include '../connection.php';
	
	$query = "select * from informtion";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $a=$row[0];
		$b= $row[1];
		$c=$row[2];
		$d =$row[3];
		
		

?>
          <td><?php echo $a; ?></td>
		  <td><?php  echo $b; ?></td>
		  <td><?php echo $c; ?></td>
		  <td><?php  echo $d; ?></td>
		   
		   

              </tr>		

	<?php } ?>	  
		   
		   
		   </table>
		   
		   
		    <a href="home.php">back</a>
			
			
			<h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		

      </body>
   </html>	  