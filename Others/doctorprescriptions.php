<nav>
    <?php 
    session_start();
    include_once 'DBConnection.php';
    $doctorId=$_SESSION['userId'];

$select="SELECT * FROM doctor WHERE userId=$doctorId";
$resulttt=mysqli_query($conn, $select);
$row=mysqli_fetch_assoc($resulttt);
$Fname=$row['FirstName'];
$Lname=$row['LastName'];
    ?>

    <img src="/login-system/logo.png.jpeg" alt="logo">
    <ul>
        <li><a href="#"><?php echo $Fname.' '.$Lname ?></a></li>
        <li><a href="#"><?php echo $_SESSION['userId']; ?></a></li>
    </ul>
    <img src="\login-system\profile.png.jpeg" alt="profile">
</nav><br>
<?php

include  "db_conn.php";
$Did=$_GET['Did'];

// Check if a search query is provided
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify the SQL query to include the search condition
    $sqll = "SELECT * FROM Drug_E_Dispensing.prescriptions WHERE userId LIKE '%$search%'";
} else {
    // Default query without search condition
    $sqll = "SELECT * FROM Drug_E_Dispensing.prescriptions WHERE Did=$Did";
}

$resultt = mysqli_query($conn , $sqll);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PRESCRIPTION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #088F8F;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 14px;
        }

        button[type="submit"] {
            background-color: #088F8F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button[type="submit"]:hover {
            background-color: #077F7F;
        }

        a {
            text-decoration: none;
        }

        a button {
            background-color: #088F8F;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        a button:hover {
            background-color: #077F7F;
        }
        body {
            background-image: url('background.png.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        nav {
            background: #088F8F;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 3%;
        }

        img[alt="logo"], img[alt="profile"] {
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        nav ul {
            width: 100%;
            text-align: right;
            margin: 0;
            padding: 0;
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

    </style>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search by Patient ID or Prescription ID">
        <button type="submit">Search</button>
    </form>

    <table>
        <tr>
            <th>PRESCRIPTION ID</th>
            <th>PATIENT ID</th>
            <th>PATIENT NAME</th>
            <th>DOCTOR NAME</th>
            <th>DOCTOR ID</th>
            <th>PRESCRIPTION</th>
            <th>DATE</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($resultt)) {
        ?>
        <tr>
            <td><?php echo $row['presId']; ?></td>
            <td><?php echo $row['userId']; ?></td>
            <td><?php echo $row['PName']; ?></td>
            <td><?php echo $row['DName']; ?></td>
            <td><?php echo $row['Did']; ?></td>
            <td><?php echo $row['Prescription']; ?></td>
            <td><?php echo $row['Date']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table><br>

    <a href="doctor.php"><button>BACK</button></a>
</body>
</html>
