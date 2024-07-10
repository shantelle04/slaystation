<?php 
include "db_conn.php";
if(isset($_POST['submit'])) {
    $file= $_FILES['image']['name'];


$query="INSERT INTO drugs(image) VALUES ('$file)";
$res=mysqli_query($con,$query);
if($res) {
    move_uploaded_file($_FILES['image']['tmp_name'], "$file");
}
}
