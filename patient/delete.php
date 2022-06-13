<?php 
//Delete:
session_start();

if(isset($_GET['email'])){
	
	$email=$_GET['email'];
	include "../database.php";
	
	$del=" delete from appointment where Email='$email' ";
	$run=$connect->query($del);
	
	
	header('location:../index.php?page=patient/manpatients');
	
	$_SESSION['del']="Deleted Successfully !";
	
}
?>