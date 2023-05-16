<?php
 include 'search.php';
// Create a new MySQLi instance
$mysqli = new mysqli('localhost', 'root', '', 'books');

// Check for connection errors
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>



<?php
// Assuming you have a table named "users" with columns "id", "name", and "email"

$bookname = $_POST['bookname'];
$age= $_POST['age'];
$booktype = 'novel';


$sql = "SELECT * from books where Bookname = '$bookname'  && Age= '$age'  &&  Booktype= '$booktype'  ";

 
$result = $mysqli->query($sql);

// Check for query execution errors
if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>


<?php
// Fetch the data from the result set
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row; 
 
}

// Free the result set
$result->free();

// Close the database connection
$mysqli->close();

// Output the data as JSON
 

?>

<table border="1" align="center">
  <thead>
    <tr>
       <th>Si</th>
      <th>BookName</th>
      <th>publisname</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $item): ?>
      <tr>
      	<td><?php echo $item['id']; ?></td>
      	<td><?php echo $item['BookName']; ?></td>
        <td><?php echo $item['publisname']; ?></td>
        <td><?php echo $item['PublisDate']; ?></td>
         
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

 
