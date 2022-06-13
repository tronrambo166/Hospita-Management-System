<?php session_start();

 include "../database.php";

// getting book id / Return Book:
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$student_id=$_GET['student_id'];
			$return_date= date('M d, Y');
	
		$up=" UPDATE issue_books SET Return_date ='$return_date'  where Book_id = '$id' AND Student_id = '$student_id' ";
		$run=$connect->query($up);

		if($run==true){  $_SESSION['return']="Book Returned Successfully !";
		header('location:../dashboard_std.php?page=books/returnbooks'); exit;
		    }
		
		}
?>