





<h3  class="pt-5  display-4 font-weight-bold text-center ">Add New Doctor  </h3>
<div class="text-center bg-primary mb-5"><b class="bg-primary font-italic  " >
<?php if(isset($_SESSION['insert'])){ echo $_SESSION['insert']; $_SESSION['insert']="";}?></b>
</div>


			

			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Doctor's Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" required="" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>Doctor's ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Doctor's Details</strong></label></div>
					
		    		<div class="col-sm-7"> 
								<textarea class="form-control form-group"  name="details" id="details" placeholder="Enter Doctor's Details" cols="20" rows="4"></textarea>

					
					</div>
					
		    	</div>
				
				
				
				
				
				
				
		
				
				
				<input type="submit" name="savedoc" value="Save" class="px-5 ml-5 mt-2 py-2 btn btn-info text-dark font-weight-bold  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:40px"></div>
