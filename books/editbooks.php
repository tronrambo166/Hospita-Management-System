 
 <h1 class="text-center bg-light my-5">Edit Informations</h1>
 
 
 
 <?php   
 	include "database.php";
	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from books where ID='$id'";
	$run=$connect->query($sel);
	$row=$run->fetch_assoc();
	
	
	//$_SESSION['del']="Deleted Successfully !";
	
}




 
 ?>
 
 
 
 
 
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Book Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="<?php echo $row['Book_Name'];?>" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>Book ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID "value="<?php echo $row['ID'];?>"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Author</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="author" id="author" placeholder="Enter author name"  value="<?php echo $row['Author'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="publication"><strong>Publication</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="publication" id="publication" placeholder="Enter publication name"  value="<?php echo $row['Publication'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="date"><strong>Purchase Date</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="date" name="date" id="date"   value="<?php echo $row['purchase_date'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="price"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="number" name="price" id="price" required=""  placeholder="Enter price"  value="<?php echo $row['Price'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="librarian"><strong>Librarian Username</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="librarian" id="librarian" placeholder="Enter librarian's username"  value="<?php echo $row['Librarian'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				
				<div class="clearfix"></div>
				
				<input type="submit" name="update" value="Update" class="px-3 py-2 btn btn-secondary  font-italic" />
				
		    </form>