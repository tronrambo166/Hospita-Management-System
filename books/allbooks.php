

<?php  

if(isset($_GET['search_b'])){
	
	
	$_SESSION['book_search']="Serch Results:";
	
	if($run2->num_rows == 0) $_SESSION['nobooks']="Sorry no Book found !";
}


?>




<h3 class="py-5  display-3 bg-success font-weight-bold text-center">All Books</h3>

<h3 class="text-center font-weight-bold bg-light">

<?php if(isset($_SESSION['del'])){ echo $_SESSION['del']; $_SESSION['del']=""; }?>
<?php if(isset($_SESSION['book_search'])){ echo $_SESSION['book_search']; $_SESSION['book_search']=""; } ?>


</h3>


<form action="" method="GET"> <input class="w-75 d-inline form-control font-weight-bold mt-2 mb-5 font-italic" type="search" 
value="<?php if(isset($_SESSION['search'])) echo $_SESSION['search'];?>" name="search" placeholder="Search Books" />

 <input type="submit" value="Search" name="search_b"class=" mb-2 ml-5 px-4 btn btn-primary"/></form>



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




<table class="display table table-bordered " id="">
	<thead>
		<tr>
			<th>Book <i class="fa fa-book"></i></th>
			
			<th>Price BDT</th>
			
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	
		
		if(isset($_SESSION['book_search'])){
	
	$search=$_SESSION['search'];
	
	$sel="select * from books where Book_Name LIKE '%$search%' ";
	$run=$connect->query($sel);
	
	if($run->num_rows == 0) echo "<b>Not Found !</b>";
	
	else
	while($row=$run->fetch_assoc()){ ?>
			
			<tr>
			
			<td><h4 style="width:185px"  class="bg-light font-italic font-weight-bold text-center"><?php echo $row['Book_Name'];?></h4><img class="mb-5" style="width:185px;height:155px"  src="images/217198.jpg" alt="" /></td>
			
			
			<td><?php echo $row['Price'];?></td>
			
			
			<td> 
			
			<a href="dashboard_std.php?page=books/issuebooks&id=<?php echo $row['ID'];?>" class="btn bg-info"> Issue</a>
			
			</td>
		</tr>
		
			
		<?php	
		}  }  
		
		else {
		
		
		
		$sel="select * from books";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><h4 style="width:185px"  class="bg-light font-italic font-weight-bold text-center"><?php echo $row['Book_Name'];?></h4><img class="mb-5" style="width:185px;height:155px"  src="images/217198.jpg" alt="" /></td>
			
			
			<td><?php echo $row['Price'];?></td>
			
			
			<td> 
			
			<a href="dashboard_std.php?page=books/issuebooks&id=<?php echo $row['ID'];?>" class="btn bg-info"> Issue</a>
			
			</td>
		</tr>
		
			
		<?php	
		} }
		?>
		
	</tbody>
	
	
</table>


