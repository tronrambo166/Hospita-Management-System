<?php 
//Delete:
session_start();

if(isset($_GET['id'])){
	$image=$_GET['filename'];
	
	$id=$_GET['id'];
	include "../database.php";
	
	$del=" delete from users where ID='$id' ";
	$run=$connect->query($del);
	
	
	unlink('images/'.$image);
	header('location:../index.php?page=staff/manstaff');
	
	$_SESSION['del']="A Staff just lost his job ! !";
	
}
?>