<?php 
//Delete:


if(isset($_GET['email'])){
	
	$email=$_GET['email'];
	include "../database.php";
	
	$del=" delete from appointment where Email='$email' ";
	$run=$connect->query($del);
	
	
	header('location:../index.php?page=patient/manpatients');
	
	$_SESSION['del']="Deleted Successfully !";
	
}
?>


<div class=" my-4 text-center text-danger">Welcome to the payment system !</div>
<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['up'])){ echo $_SESSION['up']; $_SESSION['up']=""; }?></h3>




<form action="" method="post" >

<input type="text" name="email" placeholder="Enter Patients Email" class="form-group font-weight-bold form-control" />
<?php if(isset($_SESSION['mailerr'])) { echo $_SESSION['mailerr']; $_SESSION['mailerr']=""; } ?>

<select name="status" class="form-control form-group "  id="">

<option value="Due">Due</option>
<option value="Half Paid">Half Paid</option>
<option value="Paid">Paid</option>

</select>

<input type="submit" name="payment" value="Update Status" class="form-group btn btn-success form-control "  />


</form>