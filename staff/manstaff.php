<h3 class="my-5  h2 text-center w-100 text-light bg-warning font-weight-bold">Staffs</h3>

<h3 class="text-center font-weight-bold bg-light"><?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?></h3>

<?php    
//include "database.php";


?>



<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Staff Name</th>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone</th>
			<th>Image</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="select * from users";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Username'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Password'];?></td>
			<td><?php echo $row['Phone'];?></td>
			<td class=""><img style="width:200px;height:130px" src="<?php echo 'images/'.$row['Photo'];?>" alt="" /></td>
			
			<td> 
			
			
			<a href="staff/delete.php?id=<?php echo $row['ID'];?>&filename=<?php echo $row['Photo'];?>" class="btn btn-warning"> Fire Him</a>
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


