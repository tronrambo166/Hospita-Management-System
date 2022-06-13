<h3 class="my-5  h2  text-center w-100 bg-primary font-weight-bold">Our Doctors</h3>

<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?></h3>

<?php    
//include "database.php";


?>



<table class="mt-4 display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Doctor's Name</th>
			<th>ID</th>
			
			<th>Details</th>
			
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="select * from doctors";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td class="py-4" ><?php echo $row['Name'];?></td>
			<td class="py-4" ><?php echo $row['ID'];?></td>
			<td class="py-4" ><?php echo $row['Details'];?></td>
			
			
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


