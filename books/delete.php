<?php 
//Delete:

session_start();

if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	include "../database.php";
	
	$del=" delete from books where ID='$id' ";
	$run=$connect->query($del);
	if($run==true){
		echo "yes";
		
	$_SESSION['del']="Deleted Successfully !";
	
	header('location:../dashboard.php?page=books/manbooks');
		
}
}
?>