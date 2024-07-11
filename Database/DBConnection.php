<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$DBConnection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$DBConnection) {
  die("Connection failed: " . mysqli_connect_error());
}

// ... Your PHP code to process and store comments ...

mysqli_close($DBConnection);
?>