
<?php  session_start(); 

if(! isset($_COOKIE['loghms']) && !isset($_SESSION['loghms']) ){	
	header('location:login.php');
}

?>





<?php 
include "database.php";

include "appointment_code.php";





//Add Doctor";
	
	if(isset($_POST['savedoc'])){
		
		
	
	$name=$_POST['name'];
	$id=$_POST['id'];
	$details=$_POST['details'];
	
		


	
	$in=" insert into doctors(Name,ID,Details) 
	values('$name','$id','$details') ";
	
	$run=$connect->query($in);
	if($run == true) {
		
		$_SESSION['insert']="New Doctor Added Successfully !";
	
	header('location:index.php?page=staff/adddoctor'); exit;
	}
	
	}
	
	//Add Doctor";
	


	
			
			
			// Payment
			
			
			
	if(isset($_POST['payment'])){
		   

	
	$email=$_POST['email'];
	$status=$_POST['status'];
	
	 $sel="select * from appointment WHERE `Email`='$email'";
	 if($connect->query($sel)->num_rows > 0){
	 
	$up=" UPDATE `appointment` SET `Payment`='$status'  WHERE `Email`='$email' ";
	
	$run=$connect->query($up);
	
	if($run==true){
		
		$_SESSION['up']="Payment Updated Successfully !";
	    header('location:index.php?page=patient/payments'); exit;
	
	}
	
	 }
	 
	 else 		$_SESSION['mailerr']="Invalid Email !";

}


			// Payment
			
			
			
			
			
			
			// Issue Books
			
			if(isset($_POST['search'])){
				
				$id=$_POST['student_id'];
				$sel="select * from students where ID='$id'";
				$run=$connect->query($sel);
			    $row=$run->fetch_assoc();
				
				$_SESSION['std_name']=$row['Name'];
				$_SESSION['id']=$row['ID'];
				
				header('location:dashboard.php?page=books/issuebooks'); exit;
				
				
			}
			
			if(isset($_POST['issue'])){
				
				$id=$_POST['student_id'];
				$name=$_POST['name'];
				$book_id=$_POST['book_id'];
				$date=$_POST['date'];
				
				$in=" insert into issue_books(Student_name,Student_id,Book_id,Issue_date) 
	values('$name','$id','$book_id','$date') ";
	
				$run=$connect->query($in);
				
			   if($run==true){
				$_SESSION['issue']="Book Issued Successfully !";
				
				header('location:dashboard.php?page=books/issuebooks'); exit;
			   }
				
				
			}
			
			
			// Issue Books
			
			
			
			
			// Edit Patient Profile
			

			
	if(isset($_POST['save_patient'])){
		   

	
	$name=$_POST['name'];
	
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		

	
	$up=" UPDATE `appointment` SET `Name`='$name',`Email`='$email',`Contact`='$phone'  WHERE `Email`='$email' ";
   
	$run=$connect->query($up);
	
	if($run==true){
		
		$_SESSION['up']="Informations Updated Successfully !";
		//move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$photo);
    header('location:index.php?page=patient/manpatients'); exit;	
	}
}


			// Edit Patient Profile

		
			
			
			
			?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
		
		
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="style.css" />
		
		
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

        <?php $image=  $_COOKIE['photo']; ?>
		<style type="text/css">
		
	.profile {
    background: url(images/<?php echo $image; ?> ) no-repeat;
    width: 226px;
    height: 35px;
    background-size: 50px 40px;
    background-position: center left;
		}		
		
		</style>
		
		
   </head>
   
   
	
	
	
	
    <body class="">
	
	<div class="row"><img style="width:100%; height:145px;" src="images/fjGlXJ.jpg" alt="" /></div>
	
	
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a  class=" text-dark ml-2 disabled ">Cpanel / </a> <a class="navbar-brand" href="index.php"> Dashboard</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"></button
            ><!-- User's Name-->
           
		   <div class="navbar ml-auto">
		   
		   <h4 class=" profile h5 text-light font-weight-bold font-italic text-right" >Welcome, 
		   <?php list($name)=explode(' ',$_COOKIE['name']); echo $name; ?></h4>
		   
		   
            <!-- Navbar-->
            <ul class="navbar-nav  ml-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mb-1 fa-2x fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?page=profile&id=<?php echo $_COOKIE['id'];?>"><b>Profile</b></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><b>Logout</b></a>
                    </div>
                </li>
            </ul>
		   
		   </div>
		   
		   
        </nav>
		
		
			
			
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
					<div class="row">
					<div class="col-3">
					
					<div class="list-group menu  mt-3">
					<a href="" class="list-group-item bg-primary text-dark font-weight-bold disabled">Patients Section</a>
					<a href="index.php?page=patient/manpatients" 
					class="<?php if($_GET['page']=='patient/manpatients') { ?> bg-dark <?php } ?>list-group-item">Patient Details</a>
					
					<a href="index.php?page=patient/payments" class="<?php if($_GET['page']=='patient/payments') { ?> bg-dark <?php } ?> list-group-item">Payments</a>
					
					</div>
					
					<div class="list-group mt-5 menu">
					<a href="" class="list-group-item bg-primary text-dark font-weight-bold disabled">Hostipal Section</a>
					<a href="index.php?page=staff/manstaff" class="<?php if($_GET['page']=='staff/manstaff') { ?> bg-dark <?php } ?> list-group-item">Staffs</a>
					<a href="index.php?page=staff/doctors" class="<?php if($_GET['page']=='staff/doctors') { ?> bg-dark <?php } ?> list-group-item">Doctors</a>
					<a href="index.php?page=staff/adddoctor" class="<?php if($_GET['page']=='staff/adddoctor') { ?> bg-dark <?php } ?> list-group-item">Add a Doctor</a>
					
					</div>
					
					
					
					
					
					
					</div>
					
					
					
					<div class="col-9">
					
				
                       
					   <?php 
					   
					   
					   if(!isset($_GET['page'])) $page='dash';
					   else $page = $_GET['page']; 
					 
					   
					   include $page.'.php';
					   
					  
					   ?>
					   
					   
                        </div>
                    </div>
					</div>
					
					
					
					
					
					
					
					
					
					
					
                </main>
				
				</div>
                <footer class="py-4 bg-light mt-auto <?php if($_GET['page']=='dash'){  ?> fixed-bottom <?php } ?>">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-darka m-auto">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div></div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

		
		<script type="text/javascript">
		
		$(document).ready(function() {
  $('#summernote').summernote();
});
		
		</script>
		
		<script type="text/javascript">
		
		
		$(document).ready( function () {
			
			$('.menucontainer').click(function(event){
  event.stopPropagation();
});
			
			
    $('#myTable').DataTable();
} );
		
		</script>
		
    </body>
</html>
