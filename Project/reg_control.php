<?php

$con = new mysqli('localhost', 'root', '', 'books');

 $bookname = $_POST['bookname'];
 $publisname = $_POST['publisname'];
  
 $age= $_POST['age'];

 $publisdate = $_POST['publisdate'];
  
 $booktype = $_POST['booktype'];
 $pageno = $_POST['pageno'];
 
 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{

 	$stmt = "INSERT Into books(BookName, Age,PageNo, PublisDate,Booktype, publisname ) VALUES('$bookname', '$age', '$pageno', ' $publisdate','$booktype','$publisname')";
 
 	$result= mysqli_query($con, $stmt);

 	if($result)
 	 {echo "success";}

 	else 
 	{
 		 
 	}
 }

?>