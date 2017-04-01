 <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
include("includes/db.php"); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
}
echo "Connected successfully<br>";


$get_cats = "SELECT * FROM categories";
$run_cats = mysqli_query($conn, $get_cats);

while ($row_cat = mysqli_fetch_array($run_cats)){
	
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];
	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";	
}
	

?>