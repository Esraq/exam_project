<?php
session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
include '../connection.php';
 $a=$_POST['date'];
 $b=$_POST['C1'];
 $c=$_POST['C2'];
 $d=$_POST['C3'];

         
		
		
		 
		 if($a==''){
			 
			 echo "<script>alert('Please enter number!')</script>";
			 exit();
		 }
		  if($b==''){
			 
			 echo "<script>alert('Please enter link!')</script>";
			 exit();
		 }
        	 if($c==''){
			 
			 echo "<script>alert('Please enter link!')</script>";
			 exit();
		 }
		  if($d==''){
			 
			 echo "<script>alert('Please enter link!')</script>";
			 exit();
		 }
            
		 $query="insert into image5
			  (number,code,design,art) values ('$a','$b','$c','$d')";
			   if(mysql_query($query)){
			 
			  echo "<script>window.open('cn.php','_self')</script>";
			 
			 
	}
		
				
				
				
				











?>