<?php




if(isset($_POST['appoint'])){
	
	

		
		$error=array();
		$name=$username=$email=$password="";
		
		
		if(empty($_POST['name']))
		{
			$error['name']= "Name is required !";
			
		}
		
		else
		$name=$_POST['name'];
	
	
	
	
	
	
	if(empty($_POST['email']))
			$error['email']= "Email is required !";
		else
		{
			//if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				 // $error['email']= "Email is invalid !";
                 // else
		          $email=$_POST['email'];
		}
		
		
		
	
	
	if(empty($_POST['phone']))
			$error['phone']= "Phone is required !";
		else
		$phone=$_POST['phone'];
	
	if($_POST['app']=='aa')
			$error['app']= "Please select a doctor !";
		else
		$doctor=$_POST['app'];
	
	
	
	
	
	//print_r($error);
	
	if(count($error)==0){
		
			
 $in="insert into appointment(Name,Email,Contact,Doc_name) values('$name','$email','$phone','$doctor')";
			
			
			
	    $run=$connect->query($in);
		
	    if($run == true) { 
		
		$_SESSION['success']="Appointment Successfull !";
		header('location:index.php');
		exit;
		}
		
			
		}
		
		}
		
		
		
		
		
		
	  
	
 


 
 

 

?>
