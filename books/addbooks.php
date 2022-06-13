





<h3  class="pt-5  display-4 font-weight-bold text-center ">Add Books  </h3>
<div class="text-center bg-primary mb-5"><b class="bg-primary font-italic  " >
<?php if(isset($_SESSION['insert'])){ echo $_SESSION['insert']; $_SESSION['insert']="";}?></b>
</div>


			

			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Book Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="name" id="name" required="" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="id"><strong>Book ID</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="id" id="id" placeholder="Enter ID"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="author"><strong>Author</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="author" id="author" placeholder="Enter author name"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="publication"><strong>Publication</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="publication" id="publication" placeholder="Enter publication name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="date"><strong>Purchase Date</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="date" name="date" id="date" placeholder="Enter Name"  /> 
					
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="price"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="number" name="price" id="price" required=""  placeholder="Enter price"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="librarian"><strong>Librarian Username</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="librarian" id="librarian" placeholder="Enter librarian's username"  /> 
					
					</div>
					
		    	</div>
				
				
				
		
				
				
				<input type="submit" name="save" value="Save" class="px-5 ml-5 mt-2 py-2 btn btn-info text-dark font-weight-bold  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:40px"></div>
