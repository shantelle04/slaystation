<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Lumina</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        
        body {
            background-image: url(images/Screenshot\ 2024-05-01\ 010649.png);
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman';
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            height: 450vh;
        }

        /* Style for the container */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color:transparent;
            border-radius: 5px;
            box-shadow:transparent;
        }

        h1 {
            text-align: center;
            color:rgb(109, 107, 107);
            background-color:transparent;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: rgb(0, 0, 0);;
            margin-bottom: 20px;
            background-color: transparent;
        }

        /* Grid layout for outfits */
        .outfit1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px; 
            background-color:transparent;
        }

        .outfit2 {
            background-color:rgb(109, 107, 107);;
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(109, 107, 107);
            padding: 20px;
            text-align: center;
        }

        .outfit img {
            max-width: 50;
            border-radius: 50%;
            margin-bottom: 10px;
            background-color:transparent;
        }

        .team-member h3 {
            font-size: 20px;
            margin-bottom: 5px;
            background-color:transparent;
        }

        .team-member p {
            margin-bottom: 0;
            background-color:transparent;
        }
        nav {
            background-color:transparent; 
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: georgian;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display:inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: rgb(0, 0, 0);; 
            text-decoration: wavy;
        }
    </style><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
   

    <div class="container">
        <h1>Contact lumina</h1>
        <p>Contact us at lumina@gmail.com</p>
        
        <!-- Outfit Enclase -->
        <div class="outfits ">
            <div class="outfit1">
                <img src="images/fit1.jpeg">
                
            </div>

            <div class="outfits">
                <img src="images/fit2.jpeg">
               
            </div>

        </div>

        <!-- Company Overview -->
        <h2>Our Mission</h2> 
        <p>Rewinding to the 90s</p> 
        <h2>Our Vision</h2> 
        <p>Owning your power, expressing yourself with fierce individuality, and leaving everyone saying "Damn, they slay!"</p> 
    </div>

    
</body>
</html>