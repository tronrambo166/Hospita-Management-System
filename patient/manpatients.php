<h3 class="py-5  display-5 font-weight-bold bg-light ">Patients Details</h3>

<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?></h3>
<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['up'])){ echo $_SESSION['up']; $_SESSION['up']=""; }?></h3>

<?php    
//include "database.php";


	
		
		
		
?>

<div class=" float-right"><a href="#" target="_blank" class="float-right my-3 px-4 text-danger font-weight-bold font-italic btn btn-dark">Print</a></div>


<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Patient Name</th>
			
			<th>Email</th>
			<th>Phone</th>
			<th>Appointment With</th>
			<th>Payments</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="select * from appointment";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Contact'];?> </td>
			<td><?php echo $row['Doc_name'];?> </td>
			<td><?php echo $row['Payment'];?> </td>
			
			<td>
			<a href="index.php?page=patient/editprofile&email=<?php echo $row['Email'];?>" class="btn bg-info"> Edit</a>
			
			<a href="patient/delete.php?email=<?php echo $row['Email'];?>" class="btn bg-danger"> Delete</a>
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


