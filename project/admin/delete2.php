<?php
session_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}
 include '../connection.php';
  $a=$_POST['date'];
  $query = "delete from notice2 where number='$a'";
	
	if(mysql_query($query)){
		
		
		header("location:acn.php");
		
		
	}

?>
