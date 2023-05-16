<?php include 'search.php';?>

<?php

$con = new mysqli('localhost', 'root', '', 'books');

$bookname = $_POST['bookname'];
$age= $_POST['age'];
$booktype = $_POST['booktype'];


$sql = "SELECT * from books where 'Bookname' = $bookname  && 'Age'= $age  &&  'Booktype'= $booktype  ";

 
$result= mysqli_query($con, $sql);

 

 	if($result)
 	 {   
				
		 	 	while($row = mysqli_fetch_assoc($result))
		 	 	{
		 	 		
					   
					 
		 	 	}
		 	 	 
 	 }

 	else 
 	{
 		 
 	}


?>