<?php
    include_once("Templates/header.php");
?>
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
