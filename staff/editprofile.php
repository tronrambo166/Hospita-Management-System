 
 <h1 class="text-center bg-light my-5">Edit Profile</h1>
 
 
 
 <?php   
 	include "database.php";
	
 if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from librarians where ID='$id'";
	$run=$connect->query($sel);
	$row=$run->fetch_assoc();
	
	
	//$_SESSION['del']="Deleted Successfully !";
	
}




 
 ?>
 
 
 
 
 
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
			
			<div class="row">
				<div class="col-sm-9">
				
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" value="<?php echo $row['Name'];?>" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID "value="<?php echo $row['ID'];?> " readonly /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="author" placeholder="Enter author name"  value="<?php echo $row['Email'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="publication"><strong>Password</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="password" id="publication" placeholder="Enter publication name"  value="<?php echo $row['Password'];?>" /> 
					
					</div>
					
		    	</div>
				
				</div>
			
				
				
				<div class="col-sm-3 mt-5">
		    		<div class="col-sm-2 my-2"><label for=""><strong class="font-italic bg-info px-5 py-1" >Photo</strong></label></div>
					
					<div class=" mb-3 bg-dark col-sm-7 text-center text-light"> 
					<img style="width:250px"src="images/<?php echo $row['Photo']; ?>" alt="" />
					</div>
					
									<input type="file" name="file" />  

					
		    	</div>
				
				</div>
			
				
				
			
				
				
				
				
				
				
				
				
				
				<input type="submit" name="save_profile" value="Save" class="px-5 py-2 btn btn-dark text-primary font-weight-bold font-italic" />
				
		    </form>
			
			<div class="clearfix my-5"></div>