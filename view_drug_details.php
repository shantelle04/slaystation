<?php
session_start();
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Details</title>
    <style>
        /* Add your CSS styles here */
        <style>
    body {
        background-image: url('background.png.jpg');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    nav {
        background: #088F8F;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }

    img[alt="logo"], img[alt="profile"] {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        padding-left: 2%; /* Applies to logo only */
        padding-right: 2%; /* Applies to profile only */
    }

    nav ul {
        width: 100%;
        text-align: right;
    }

    nav ul li {
        display: inline-block;
        list-style: none;
        margin: 10px 20px;
    }

    nav ul li a {
        color: whitesmoke;
        text-decoration: none;
    }

    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

    </style>
</head>
<body>

<?php
if (isset($_GET['drug_id'])) {
    $drugId = mysqli_real_escape_string($conn, $_GET['drug_id']);

    // Fetch drug details based on the provided drug ID
    $sql = "SELECT * FROM pdrugstock WHERE drugId='$drugId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Display drug details in a table
        echo "<h2>Drug Details</h2>";
        echo "<table>";
        echo "<tr><th>Parameter</th><th>Value</th></tr>";
        echo "<tr><td>Drug ID</td><td>" . $row['drugId'] . "</td></tr>";
        echo "<tr><td>Drug Name</td><td>" . $row['drugName'] . "</td></tr>";
        echo "<tr><td>Drug Manufacturer</td><td>" . $row['drugManufacturer'] . "</td></tr>";
        // Add more details as needed
        echo "</table>";
    } else {
        echo "Drug details not found.";
    }
} else {
    echo "Invalid drug ID.";
}

// Close the connection
$conn->close();
?>

</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>Back Button Example</title>
</head>
<body>
    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

