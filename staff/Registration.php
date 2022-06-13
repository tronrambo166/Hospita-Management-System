
<?php  include "../Data.php";?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
</head>


<?php








if(isset($_POST['register'])){
$ob->save_info($_POST);


 
 

 }
 
 
?>









<body>
	
	<!-- Header -->
	
	
	<!-- Header -->
	
	
	
	
	
	<!-- Body -->
	
	<!-- Form Design -->
	
	
	
	<div class="container-fluid two">
		
		<div class="row">
			<div class="container" style="min-height:1000px">
			
			<div>
				<h3 class="font-arial bg-light text-center"><b>Add New Staff</b></h3>
				
				
<div class="text-center bg-success mb-5"><b class="bg-success font-italic " >

<?php if(isset($reg)) { echo $reg; $reg=""; } ?></b>

</div>	

		</div>
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					<div class="col-sm-4"> <?php if(isset($error['name'])) echo " * ".$error['name'];?></div>

					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="number" name="username" id="username" placeholder="Enter ID"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="email" id="email" placeholder="Enter Name"  /> 

					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="password"><strong>Password</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="password" id="password" placeholder="Enter Name" /> 

					
					</div>
					
					<div class="col-sm-4"> *<?php if(isset($error['name'])) echo $error['name'];?></div>
					
		    	</div>
				
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1 "><label for="name"><strong>Upload files</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class=" form-group bg-info" type="file" name="file" id="file" /> 
					</div>
					
		    	</div>
				
				<div class="clearfix"></div>
				
				<input type="submit" name="register" value="Register" class="px-3 py-2 btn btn-primary  text-italic" />
				
		    </form>
			
			
			</div>
		</div>
		
		
		
	</div>
	
	<div class="clearfix"></div>
	
	<!-- Form Design -->
	
	
	
	<!-- Body -->
	
	
	
	
	
	
	
	
	<!-- Section -->
	
	
	<!-- Section -->
	
	
	
	
	<!-- Footer -->
	
	<div class="container-fluid four">
		<div class="row foot">
			
			
			
		</div>
		
		
		
		<footer>
			<div class="row fix bg-dark ">
				<p class="m-auto font-italic text-secondary py-3">&copy; Copyright 2020. Tottenham All Rights Reserved</p>
			</div>
		</footer>
		
	</div>
	
	<!-- Footer -->
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</body>
</html>