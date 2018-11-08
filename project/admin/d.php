<?phpsession_start();
if(!$_SESSION['email']){
	
	header("location: index.php");
	
}



  include '../connection.php';
  $a=$_POST['date'];
  $query = "delete from id_list where name='$a'";
	
	if(mysql_query($query)){
		
		
		header("location:ll.php");
		
		
	}

?>
