<?php
session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
include '../connection.php';
 $a=$_POST['date'];
 $b=$_POST['C1'];


         
		
		
		 
		 if($a==''){
			 
			 echo "<script>alert('Please enter number!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter notice!')</script>";
			 exit();
		 }

            
		 $query="insert into slot3
			  (number,link) values ('$a','$b')";
			   if(mysql_query($query)){
			 
			  echo "<script>window.open('cn.php','_self')</script>";
			 
			 
	}
		
				
				
				
				











?>