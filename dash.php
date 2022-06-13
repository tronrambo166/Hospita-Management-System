
<?php

$sel="select * from doctors";
$res=$connect->query($sel);




?>

 <h1 class=" mt-3 text-center bg-primary h3 ">Book An Appointment</h1>
 <h2 class="h5 mb-5 text-center text-info"><?php if(isset($_SESSION['success'])) { echo $_SESSION['success']; $_SESSION['success']="";} ?></h2>
                       
					   
                           
						    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data">
			
		    	<div class="row ">
				
				<div class="col-2"></div>
				 
		    		<div class="col-sm-1"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					<div class="col-sm-4"> <?php if(isset($error['name'])) echo " * ".$error['name'];?></div>

					
		    	</div>
			
				
				
				
				
				
				<div class="row form-group">
				
				<div class="col-2"></div>
		    		<div class="col-sm-1"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="text" name="email" id="email" placeholder="Enter Name"  /> 

					</div>
					
						<div class="col-sm-4"> <?php if(isset($error['email'])) echo " * ".$error['email'];?></div>
				
		    	</div>
				
				
				
				
				
				<div class="row form-group">
				<div class="col-2"></div>
		    		<div class="col-sm-1"><label for="phone"><strong>Contact</strong></label></div>
					
		    		<div class="col-sm-5"> 
					<input class="form-control form-group" type="number" name="phone" id="phone" placeholder="Enter Phone"  /> 
					
					</div>
					<div class="col-sm-4"> <?php if(isset($error['phone'])) echo " * ".$error['phone'];?></div>

					
		    	</div>
				
				
				
				<div class="row form-group">
				<div class="col-1"></div>
		    		<div class="col-sm-2 text-right "><label for="app"><strong>Appointment</strong></label></div>
					
		    		<div class="col-sm-5"> 
                       <select name="app" id="" class="form-control">
					   <option value="aa">Select a Doctor</option>
					   
					   <?php  while($row=$res->fetch_assoc()) { ?>
					   <option value="<?php echo $row['Name']; ?>" ><?php echo $row['Name']; ?></option>
					   
					   <?php } ?>
					   
					   </select>					
					   </div>
					   	<div class="col-sm-4"> <?php if(isset($error['app'])) echo " * ".$error['app'];?></div>

					
		    	</div>
				
				<div class="clearfix "></div>
				
				<input type="submit" name="appoint" value="Appoint" class="mt-4 px-3 py-2 btn btn-dark  font-weight-bold font-italic" />
				
		    </form>
			
			
						   
                                 
                                