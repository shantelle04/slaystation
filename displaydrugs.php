<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <style>
nav {
  width: 100%;
  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
  margin: 0 ;
  padding: 20px 0;
  position: relative;
}

nav ul {
  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  padding: 18px;
  font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  color: rgb(0, 0, 0);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}
</style>
<nav>
    <ul>
      <li>
        <a href="../homepage/index.php">Home</a>
      </li>
      <li>
        <a href="../register/signup.html"><br>Register</a>
      </li>
      <li>
        <a href="../login/login.html"><br>Login</a>
    </ul>
  </nav>
</body>
</html>
<?php
session_start();
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drug Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Add any additional CSS styles you need here */
    </style>
</head>
<body>
    <h2>Drug Information</h2>

    <?php
    // Assuming $conn is your database connection

    // Categories based on drugId
    $category1Sql = "SELECT drugId, image FROM pdrugstock WHERE drugId < 100";
    $category2Sql = "SELECT drugId, image FROM pdrugstock WHERE drugId >= 100";

    // Execute the queries
    $category1Result = $conn->query($category1Sql);
    $category2Result = $conn->query($category2Sql);

    // Display Category 1 drugs
    echo "<h3>Drug Category: C1</h3>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Image</th>
            <th>Action</th>
          </tr>";

    if ($category1Result->num_rows > 0) {
        while($row = $category1Result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='".$row["image"]."' alt='Drug Image' style='max-width: 100px; max-height: 100px;'></td>";
            echo "<td><a href='view_drug_details.php?drug_id=".$row["drugId"]."'>View Details</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No drugs in this category</td></tr>";
    }

    echo "</table>";

    // Display Category 2 drugs
    echo "<h3>Drug Category: C2</h3>";
    echo "<table border='1'>";
    echo "<tr>
            <th>Image</th>
            <th>Action</th>
          </tr>";

    if ($category2Result->num_rows > 0) {
        while($row = $category2Result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='".$row["image"]."' alt='Drug Image' style='max-width: 100px; max-height: 100px;'></td>";
            echo "<td><a href='view_drug_details.php?drug_id=".$row["drugId"]."'>View Details</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No drugs in this category</td></tr>";
    }

    echo "</table>";

    // Close the connection
    $conn->close();
    ?>
    <a href="patient.php"><button >BACK</button></a>
</body>
</html>
