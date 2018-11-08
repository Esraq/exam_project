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
			   <th>Number</th>
			   <th>code</th>
			    
	           <th>design</th>
			   <th>art</th>
			
			  </tr>
              <tr>
	   <?php
       include '../connection.php';
	
	$query = "select * from image5";
	$run = mysql_query($query);
	
	while ($row=mysql_fetch_array($run)){
		
	    $u= $row[0];
	    $n= $row[1];
		$m= $row[2];
	    $l= $row[3];;
	
		
		

?>
          <td><?php echo $u; ?></td>
		  <td><?php  echo $n; ?></td>
		  <td><?php echo $m; ?></td>
		  <td><?php  echo $l; ?></td>
		  
		   

              </tr>		

	<?php } ?>	  
		   
	     <h4 align='right' style='margin-right:50px;margin-top:50px;'>
             <a href='logout.php'>logout Here</a></h4>		 
		
         <form action="publish11.php" method="post">  
         <fieldset>
              <legend>For latest notice click</legend>
             Enter number:
             <input type="text" name="date"><br>
             Enter code:<br>
             <textarea NAME="C1" Rows="5" COLS="40">
			  </textarea> <br>
			  Enter design:<br>
             <textarea NAME="C2" Rows="5" COLS="40">
			  </textarea> <br>
			  Enter art:<br>
             <textarea NAME="C3" Rows="5" COLS="40">
			  </textarea> <br>
			  
			  <input type="submit"><br>
			  
			     <a href="imagepanel.php">First page</a><br>
                 <a href="home.php">Home page</a><br>


			 
           </fieldset>
        
            
        </form>
		
		 <form action="delete11.php" method="post">  
		
		 <fieldset>
              <legend>For delete select date</legend>
             Enter number:
             <input type="text" name="date">
           
			  <input type="submit">
			  
           </fieldset>
        
            
        </form>
       
       
               


		</body>
        </html>		