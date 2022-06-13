<h3 class="py-5  display-3 font-weight-bold text-center">Manage Books</h3>

<h3 class="text-center font-weight-bold bg-light">

<?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?>
<?php if(isset($_SESSION['up'])){ echo $_SESSION['up']; $_SESSION['up']=""; }?>


</h3>



<?php    
include "database.php";

// getting active / inactive:
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
	
		$sel=" select * from category where ID = '$id' ";
		$run=$connect->query($sel);
		$row=$run->fetch_assoc();
		print_r($row);
		
		if($row['Status']==1){
			$up= "UPDATE `category` SET `Status`= '0' WHERE `ID`= '$id' ";
			$res=$connect->query($up);
			
		}
		else{
			$up= "UPDATE `category` SET `Status`= '1' WHERE `ID`= '$id' ";
			$res=$connect->query($up);
			
		}
		
		}

?>




<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Book Name <i class="fa fa-book"></i></th>
			<th>ID</th>
			<th>Author</th>
			<th>Publication</th>
			<th>Purchase Date</th>
			<th>Price BDT</th>
			<th>Librarian</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		$sel="select * from books";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo $row['Book_Name'];?></td>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Author'];?></td>
			<td><?php echo $row['Publication'];?></td>
			<td><?php echo $row['purchase_date'];?></td>
			<td><?php echo $row['Price'];?></td>
			<td><?php echo $row['Librarian'];?></td>
			
			<td> 
			
			<a href="dashboard.php?page=books/editbooks&id=<?php echo $row['ID'];?>" class="btn bg-info"> Edit</a>
			
			<a href="books/delete.php?id=<?php echo $row['ID'];?>" class="btn bg-danger"> Delete</a>
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


