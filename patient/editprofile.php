 
 <h1 class="text-center bg-light my-5">Edit Patients</h1>
 
 
 
 <?php   
 	include "database.php";
	
 if(isset($_GET['email'])){
	
	$email=$_GET['email'];
	
	
	//$up=" delete from category where ID='$id' ";
	
	$sel="select * from appointment where Email='$email'";
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
		    		<div class="col-sm-2"><label for="author"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="author" placeholder="Enter author name"  value="<?php echo $row['Email'];?>" /> 
					
					</div>
					
		    	</div>
				
				
			
			
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="phone"><strong>Phone</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="phone" id="phone"   value="<?php echo $row['Contact'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="app"><strong>Appointment With</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="app" id="app" readonly  value="<?php echo $row['Doc_name'];?>" /> 
					
					</div>
					
		    	</div>
				
				
				<input type="submit" name="save_patient" value="Save" class="px-5 py-2 btn btn-dark text-primary font-weight-bold font-italic" />
				
		    </form>
			
			
				
				</div>
			
				
				
			
				
				
				
				
				
				
				
				
				
				
			
			<div class="clearfix my-5"></div>