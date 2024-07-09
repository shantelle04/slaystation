<!DOCTYPE html>
<html>
<head>
    <title>UPDATE DRUG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .form-container {
            height: 500px;
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .form-container input[type="text"],
        .form-container input[type="file"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-container button {
            background-color: #088F8F;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        .form-container button a {
            color: white;
            text-decoration: none;
        }

        .form-container button[type="submit"]
        {
            float: right;
        }
        .form-container button[type="button"] {
            float: left;
        }

        .form-container button[type="submit"]:hover,
        .form-container button[type="button"]:hover {
            background-color: #077F7F;
        }
    </style>
</head>
<body>
    <?php
    include 'db_conn.php';
    $drugId = $_GET['Id'];
    $select = "SELECT * FROM Pdrugstock WHERE drugId=$drugId;";
    $resultt = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($resultt);
    $drugID = $row['drugId'];
    $drugName = $row['drugName'];
    $stock = $row['stock'];
 

    if (isset($_POST['update'])) {
        $stock = $_POST['stock'];
        $addstock = $_POST['addstock'];
        $newstock=$stock+$addstock;

        $update = "UPDATE Pdrugstock SET stock=$newstock
        WHERE drugId=$drugId;";
        $result = mysqli_query($conn, $update);

        if ($result) {
            header('location:pdrugstock.php');
        }
    }
    ?>

    <div class="form-container">
        <h2>Update Drug Stock</h2>
        <form action="" method="post">
        <p>DRUG ID:</p>
            <input type="text" name="drugId" value="<?php echo $drugID; ?>" readonly><br>
            <p>DRUG NAME:</p>
            <input type="text" name="drugName" value="<?php echo $drugName; ?>" readonly><br>
            <p>CURRENT STOCK AVAILABLE:</p>
            <input type="text" name="stock" value="<?php echo $stock; ?>" readonly><br>
            <p>INCREASE STOCK BY:</p>
            <input type="text" name="addstock" placeholder="Added Stock" autocomplete="off" ><br>
            <button type="submit" name="update">ADD</button>
            <button type="button"><a href="pdrugstock.php">BACK</a></button>
        </form>
    </div>
</body>
</html>
