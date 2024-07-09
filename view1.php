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
    </style>
</head>
<body>
    <h2>Drug Information</h2>

    <?php
    // Assuming $conn is your database connection

    // SQL to select all drugs and their images
    $sql = "SELECT drugId, image FROM drugs";

    // Execute the query
    $result = $conn->query($sql);

    // Display the drugs and images
    echo "<table border='1'>";
    echo "<tr>
            <th>Drug ID</th>
            <th>Image</th>
          </tr>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["drugId"]."</td>";
            echo "<td><img src='data:image/jpeg;base64,".base64_encode($row["image"])."' alt='Drug Image' style='max-width: 100px; max-height: 100px;'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No drugs found</td></tr>";
    }

    echo "</table>";

    // Close the connection
    $conn->close();
    ?>
</body>
</html>
