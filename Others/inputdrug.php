<!DOCTYPE html>
<html>
<head>
    <title>DRUG REGISTRATION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .form-container input[type="text"],
        .form-container input[type="file"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-container button {
            background-color: #088F8F;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: white;
        }

        .form-container button:hover {
            background-color: #077F7F;
        }

        .back-button {
            display: block;
            margin-top: 10px;
        }

        .back-button button {
            background-color: #088F8F;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: white;
        }

        .back-button button:hover {
            background-color: #077F7F;
        }
    </style>
</head>
<body>
    



 <!DOCTYPE html>
<html>
<head>
    <title>DRUG REGISTRATION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            height: 350px;
            width: 400px;
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
            
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
 
        }

        .form-container button[type="submit"] {
            float: right;
            color: white;
        }

        .form-container button[type="submit"]:hover {
            background-color: #077F7F;
        }
        .form-container button[type="button"] {
            color: white;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    include "db_conn.php";

    if (isset($_POST['register'])) {
        $drugId = mysqli_real_escape_string($conn, $_POST['drugId']);
        $drugName = mysqli_real_escape_string($conn, $_POST['drugName']);
        $drugManufacturer = mysqli_real_escape_string($conn, $_POST['drugManufacturer']);
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        $drug_category = mysqli_real_escape_string($conn, $_POST['drug_category']);
        $select = "SELECT * FROM drugs WHERE drugId='$drugId';";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            echo 'Drug already exists!';
        } else {
            $insert = "INSERT INTO drugs (drugId, drugName, drugManufacturer, image,drug_category) VALUES ('$drugId','$drugName','$drugManufacturer','$image''$drug_category');";
            $result=mysqli_query($conn, $insert);
            // header('location:pdrugs.php');
            if ($result){
                $insertt = "INSERT INTO Pdrugstock (drugId, drugName, drugManufacturer, image, stock) VALUES ('$drugId','$drugName','$drugManufacturer','$image',0);";
                $resultt=mysqli_query($conn, $insertt);
                header('location:pdrugs.php');
            }
        }
    }
    ?>


    <div class="form-container">
        <h2>Drug Registration</h2>
        <form action="" method="post">
            <input type="text" name="drugId" placeholder="Drug ID" autocomplete="off"><br>
            <input type="text" name="drugName" placeholder="Drug Name" autocomplete="off"><br>
            <input type="text" name="drugManufacturer" placeholder="Drug Manufacturer" autocomplete="off"><br>
            <input type="file" name="image" placeholder="Drug Image"><br>
            <select name="drug_category">
                <option value="C1">Category 1</option>
                <option value="C2">Category 2</option>
            </select><br>
            <button type="submit" name="register">Register Now</button>
        </form>
    </div>

    <div class="back-button">
        <a href="pdrugs.php"><button>BACK</button></a>
    </div>
</body>
</html>
