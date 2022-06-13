

   




<h3 class="py-5  display-4 font-weight-bold text-center bg-light">Return Books <small class=" font-italic h3" >(Showing all books issued)</small></h3>

<h4 class="text-center text-light font-italic font-weight-bold bg-dark">

<?php if(isset($_SESSION['return'])){ echo $_SESSION['return']; $_SESSION['return']=""; }?>






</h4>



<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Book Name <i class="fa fa-book"></i></th>
			<th>Book ID</th>
			<th>Issued By</th>
			<th>Issue Date</th>
			<th>Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php 
	        $id=$_SESSION['student_id'];
		
				//$sel="select blog.*,category.Name from blog,category  where blog.Category_ID=category.ID";
				
			$sel=" select books.Book_Name, books.ID, students.Name, issue_books.Issue_date
			from issue_books
			INNER JOIN books ON issue_books.Book_id = books.ID
			INNER JOIN students ON issue_books.Student_id = students.ID
			
			where Student_id='$id' AND Return_date='' ";
		
		$res=$connect->query($sel);
		
		
		while($row=$res->fetch_assoc()){ ?>
			
			<tr>
			
			<td><?php echo $row['Book_Name'];?></td>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Issue_date'];?></td>
			
			<td> 
			
			<a href="books/return_query.php?id=<?php echo $row['ID'];?>&student_id=<?php echo $id;?>" class="btn bg-info"> Return Book</a>
			
			
			</td>
		</tr>
			
		<?php	
		}
		?>
		
	</tbody>
	
	
</table>


