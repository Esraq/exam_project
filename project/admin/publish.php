<?php
session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
include '../connection.php';

 $a=$_POST['date'];
 $b=$_POST['notice'];


         
		
		 $a=$_POST['date'];
		 $b=$_POST['notice'];
		 
		 
		 if($a==''){
			 
			 echo "<script>alert('Please enter number!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter notice!')</script>";
			 exit();
		 }

            
		 $query="insert into slot1
			  (number,headline) values ('$a','$b')";
			   if(mysql_query($query)){
			 
			  echo "<script>window.open('cn.php','_self')</script>";
			 
			 
	}
		
				
				
				
				











?>