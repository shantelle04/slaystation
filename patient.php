<nav>
    <img src="logo.png.jpeg" alt="logo">
    <ul>
        <li><a href="displaydrugs.php">DRUG CATEGORIES</a></li>
        <li><a href="patientprescriptions.php">PRESCRIPTIONS</a></li>
        <li><a href="patientdispensed.php">DRUGS DISPENSED</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
    <img src="profile.png.jpeg" alt="profile">
</nav>


<style>
    nav {
        background: #088F8F;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }
    img[alt="logo"] {
        height: 50px;
        width: 50px;
        padding-left: 2%;
        border-radius: 50%;
    }
    img[alt="profile"] {
        height: 50px;
        width: 50px;
        padding-right: 2%;
        border-radius: 50%;
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
</style>

<?php
session_start();

if (isset($_SESSION['userPass']) && isset($_SESSION['userId'])) {
    include_once "DBConnection.php";
    $userId = $_SESSION['userId'];

    $sqli = "SELECT * FROM patientinfo WHERE userId='$userId'";
    $resultt = mysqli_query($conn, $sqli);

    if(mysqli_num_rows($resultt)< 1){

    $sqli = "SELECT * FROM patient WHERE userId='{$_SESSION['userId']}'";
    $result = mysqli_query($conn, $sqli);
    $row = mysqli_fetch_assoc($result);
    $Fname = $row['FirstName'];
    $Lname = $row['LastName'];
    $Id = $row['userId'];
    }
    $Age = 'NILL';
    $Gender = 'NILL';
    $Phone = 'NILL';
    $Location = 'NILL';
    $Height = 'NILL';
    $Weight = 'NILL';
    $Ename = 'NILL';
    $Erelation = 'NILL';
    $Ephone = 'NILL';
    $Allergies = 'NILL';

     if(mysqli_num_rows($resultt)> 0){

        $row = mysqli_fetch_assoc($resultt);
        $Fname = $row['FirstName'];
        $Lname = $row['LastName'];
        $Id = $row['userId'];
        $Age = $row['Age'];
        $Gender = $row['Gender'];
        $Phone = $row['Phone'];
        $Location = $row['Location'];
        $Height = $row['Height'];
        $Weight = $row['Weight'];
        $Ename = $row['Ename'];
        $Erelation = $row['Erelation'];
        $Ephone = $row['Ephone'];
        $Allergies = $row['Allergies'];
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <style>
        body {
            background-image: url('background.png.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h3, h4, h5 {
            color: #088F8F;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #088F8F;
            color: white;
        }

        button {
            background-color: #088F8F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #077F7F;
        }
    </style>
</head>
<body>
    <h3>PATIENT INFO</h3>

    <table>
        <tr>
            <th>Field</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $Fname . ' ' . $Lname; ?></td>
        </tr>
        <tr>
            <td>User ID</td>
            <td><?php echo $Id; ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $Age; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $Gender; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $Phone; ?></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><?php echo $Location; ?></td>
        </tr>
        <tr>
            <td>Height</td>
            <td><?php echo $Height; ?></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><?php echo $Weight; ?></td>
        </tr>
        <tr>
            <td>Emergency Contact</td>
            <td>
                <strong>Name:</strong> <?php echo $Ename; ?><br>
                <strong>Relation:</strong> <?php echo $Erelation; ?><br>
                <strong>Phone:</strong> <?php echo $Ephone; ?>
            </td>
        </tr>
        <tr>
            <td>Medical Info</td>
            <td><?php echo $Allergies; ?></td>
        </tr>
    </table>

    <button><a href="insertpatientprofile.php?patientId=<?php echo $Id; ?>">INSERT/UPDATE INFO</a></button>
    <!-- <button><a href="editpatientinfo.php?patientId=<?php echo $Id; ?>">UPDATE INFO</a></button> -->
</body>
</html>

<?php
}
?>
