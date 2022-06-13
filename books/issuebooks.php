
<?php 
//if(isset($_GET[''])
$sel="select* from students";
$sel2="select * from books";
$run=$connect->query($sel);
$run2=$connect->query($sel2);
	
if(isset($_GET['id'])){
	
	$book_id=$_GET['id'];
	$std_name=$_SESSION['student_name'];
	$std_id=$_SESSION['student_id'];
	
	
}



?>




<h3  class="pt-5  bg-light display-4 font-weight-bold text-center font-latin">Issue Books  </h3>
<div class="text-center bg-primary mb-5"><b class="bg-primary font-italic  " >
<?php if(isset($_SESSION['issue'])){ echo $_SESSION['issue']; $_SESSION['issue']="";}?></b>
</div>


			

			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group mb-4">
				<div class="col-sm-1"></div>
		    		<div class="col-sm-2"><label for="name"><strong>Select Your Identity</strong></label></div>
					
		    		<div class="col-sm-4 mt-1"> 
						<select class="w-100" name="student_id" id="">  
						<option value="">Select</option>
						
				<?php	if(isset($_SESSION['std_name'])) { ?>
	<option selected hidden value="<?php echo $_SESSION['id']; ?>">  <?php  echo $_SESSION['std_name']; ?></option> 
						
				<?php  }  while($row=$run->fetch_assoc()){  if(isset($_GET['id'])) {  ?>
				
						<option selected value="<?php echo $std_id; ?>"><?php echo $std_name; ?></option>
						<?php break; } else { ?>
						
						<option value="<?php echo $row['ID']; ?>"><?php echo $row['Name']; ?></option>
						
				<?php  } } ?>
						
						</select>
					
					</div>
					
					<div class="col-sm-1 pl-0"><button href=""
					class="btn-success text-dark font-weight-bold font-italic  " type="submit" value="" name="search"  > Search</button> </div>
					
		    	</div>
				
				
				<div class="row form-group ">
				
				<div class="col-sm-1"></div>
				
		    		<div class="col-sm-2"><label for="name"><strong>Student Name</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="text" name="name" id="name" 
					value="<?php if(isset($_GET['id'])) echo $std_name;  elseif(isset($_SESSION['std_name']))  echo $_SESSION['std_name'];  ?>"   /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group mb-5 ">
				
				<div class="col-sm-1"></div>
				
		    		<div class="col-sm-2"><label for="id"><strong>Student ID</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="text" name="id" id="id" 
					value="<?php if(isset($_GET['id'])) echo $std_id; elseif(isset($_SESSION['id']))  echo $_SESSION['id']; ?>"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group mb-4">
				<div class="col-sm-1"></div>
		    		<div class="col-sm-2"><label for="name"><strong>Select Book</strong></label></div>
					
		    		<div class="col-sm-5"> 
						<select class="w-100" name="book_id" id="">  
						<option value="">Select</option>
						
						<?php while($row2=$run2->fetch_assoc()){  if(isset($_GET['id'])){ 
						
						if( $row2['ID']==$book_id) { ?>
						
						<option selected  value="<?php echo $row2['ID']; ?>"><?php echo $row2['Book_Name']; ?></option>
						
						<?php } } else {?>
							<option  value="<?php echo $row2['ID']; ?>"><?php echo $row2['Book_Name']; ?></option>
						
						<?php } } ?>
						
						</select>
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
				<div class="col-sm-1"></div>
		    		<div class="col-sm-2"><label for="name"><strong>Book Issue Date</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="text" name="date" id="date"  value="<?php echo date('d/m/Y');?>" readonly /> 
					
					</div>
					
		    	</div>
				
				
				
				
				
				
				
		
				
				
      <div class="row">
	  <div class="col-sm-5 "></div>
	
             <input type="submit" name="issue" value="Issue Book" class="px-5 ml-5 mt-3 py-2 btn btn-info text-dark font-weight-bold  font-italic" /> </div>
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:40px"></div>
