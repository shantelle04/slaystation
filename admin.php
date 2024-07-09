<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            margin: 10px;
        }

        .floating-head-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .floating-head {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 160px;
            height: 160px;
            background-color: #088F8F;
            color: black;
            border-radius: 50%;
            font-size: 16px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .floating-head:hover {
            background-color: #077F7F;
        }

        .horizontal-container {
            display: flex;
            justify-content: center;
        }

        .horizontal-container a {
            margin: 10px;
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

        /* Style for the welcome message */
        .welcome-message {
            position: absolute;
            top: 20px;
            right: 20px;
            font-weight: bold;
            font-size: 32px;
        }
    </style>
</head>
<body>
    <div class="floating-head-container">
        <a href="viewdoctorsadmin.php"><div class="floating-head">DOCTORS</div></a>
        <a href="viewpatientsadmin.php"><div class="floating-head">PATIENT</div></a>
        <a href="viewpharmacistsadmin.php"><div class="floating-head">PHARMACIST</div></a>
    </div>

    <div class="horizontal-container">
        <a href="viewpcompanysadmin.php"><div class="floating-head">PHARMACEUTICAL COMPANY</div></a>
        <a href="viewdrugsadmin.php"><div class="floating-head">DRUGS</div></a>
    </div>

    <!-- Display the welcome message -->
    <div class="welcome-message">
        <?php
            session_start();
            if (isset($_SESSION['userId'])) {
                echo 'Welcome, ' . $_SESSION['userId'] . '!';
            } else {
                echo 'Unknown user';
            }
        ?>
    </div>

    <a href="index.php"><button>LOGOUT</button></a>
</body>
</html>
