<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Details</title>
    <style>
        /* Add your CSS styles for layout and styling here */

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .details {
            max-width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="details">
        <h2>Drug Details</h2>
        <!-- Display drug details based on the drug ID passed via the URL parameter -->
        <?php
            // Fetch and display drug details based on the drug ID
            $drug_id = isset($_GET['drug']) ? $_GET['drug'] : 'Unknown Drug';
            echo "Details for Drug $drug_id";
            // You can fetch and display more details based on the drug ID
        ?>
    </div>
</body>
</html>
