<?php  if(isset($_GET['id'])) {
				
				$_SESSION['id']=$_GET['id'];
				}
				
				$id=$_SESSION['id'];

			
			$select=" select * from users where ID='$id' ";
			$res=$connect->query($select);
			$row=$res->fetch_assoc();
			
			
			?>
			
			<div class="row">
				<div class="col-sm-8">
			
			<div class="my-5 text-center">
				<h2 class="h1 d-inline bg-light px-4 ">ID : </h2> <h2 class="h1 d-inline"><?php echo "".$row['ID'];?></h2>
			</div>
			
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data">
			
		    	<div class="row form-group">
		    		<div class="col-sm-2"><label for="name"><strong>Name</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					<?php echo $row['Name'];?>
					</div>
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="username"><strong>ID</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					<?php echo $row['ID']; $photo_id=$row['ID']; ?>
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="email"><strong>Email</strong></label></div>
					
		    		<div class=" bg-dark col-sm-7 text-center text-light"> 
					<?php echo $row['Email'];?>
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-2"><label for="password"><strong>Password</strong></label></div>
					
					<div class=" bg-dark col-sm-7 text-center text-light"> 
					<?php echo $row['Password'];?>
					</div>
					
		    	</div>
				
				
		    </form>
			</div>
			
			
			<div class="col-sm-4 mt-5">
		    		<div class="ml-5 my-5"><label for=""><strong class="font-italic bg-info px-5 py-1" >Photo</strong></label></div>
					
					<div class=" mb-3 bg-dark text-center text-light"> 
					<img style="width:250px"src="images/<?php echo $row['Photo']; ?>" alt="" />
					</div>
                  <div class="my-4 "> <a href="index.php?page=editprofile&id=<?php echo $_COOKIE['id'];?>"class="btn btn-info" value="" >Edit Profile</a>
				  </div>
					
		    	</div>
				
				</div>
			

			
			
			 
			
			