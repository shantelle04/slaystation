<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partnership Page</title>
  <style>
    /* Global styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Header styles */
    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    .logo img {
      max-width: 50%;
      height: auto;
    }

    .menu {
      list-style: none;
      display: flex;
      align-items: center;
      font-family: "Arial", sans-serif;
    }

    .menu li {
      margin-left: 20px;
    }

    .menu li a {
      position: relative;
      display: inline-block;
      padding: 8px 12px;
      font-size: 16px;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .menu li a:hover {
      background-color: #4CAF50;
    }

    .menu li a.btn {
      background-color: transparent;
      border: 2px solid #4CAF50;
    }

    .menu li a.btn:hover {
      background-color: #4CAF50;
      color: #fff;
    }

    /* Partnership page styles */
    #partnership {
      background-color: #f9f9f9;
      padding: 60px 0;
    }

    #partnership h2 {
      font-size: 36px;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    .partnership-info {
      display: flex;
      justify-content: center;
    }

    .partner {
      width: 300px;
      padding: 20px;
      margin: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      text-align: center;
    }

    .partner img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .partner h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .partner p {
      font-size: 16px;
      color: #777;
    }

    .partner a {
      display: block;
      margin-top: 10px;
      text-decoration: none;
      color: #4CAF50;
      font-weight: bold;
    }

    .partner a:hover {
      color: #45A048;
    }

    /* Footer styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    .footer-links,
    .footer-contacts,
    .footer-social {
      flex: 1;
      padding: 10px;
    }

    .footer-links ul,
    .footer-social ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-links ul li,
    .footer-social ul li {
      margin-bottom: 5px;
    }

    .footer-links a,
    .footer-social a {
      color: white;
      text-decoration: none;
    }

    .footer-links a:hover,
    .footer-social a:hover {
      color: white;
    }

    .back-button {
      display: block;
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
      color: #4CAF50;
    }

    .back-button:hover {
      color: #45A048;
    }
  </style>
</head>
<body>
  <header>
    <!-- Your header content here -->
  </header>

  <section id="partnership">
    <div class="container">
      <h2>Our Partnerships</h2>
      <div class="partnership-info">
        <div class="partner">
          <img src="partner1.jpg" alt="World Health Organization">
          <h3>World Health Organization (WHO)</h3>
          <p>The World Health Organization is a specialized agency of the United Nations responsible for international public health. Our partnership with WHO enables us to access valuable resources, guidance, and support in our mission to provide high-quality healthcare products.</p>
          <a href="https://www.who.int/" target="_blank">Learn More</a>
        </div>

        <div class="partner">
          <img src="partner2.png" alt="European Union">
          <h3>European Union (EU)</h3>
          <p>The European Union plays a crucial role in shaping health policies and regulations across Europe. Through our partnership with the EU, we are able to contribute to and benefit from efforts to improve healthcare standards and access for all citizens.</p>
          <a href="https://europa.eu/" target="_blank">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-links">
        <h2>Links</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="#Contact">Contact</a></li>
          <!-- Add more links as needed -->
        </ul>
      </div>

      <div class="footer-contacts">
        <h2>Contact Us</h2>
        <p>123 Main Street, City</p>
        <p>Email: info@example.com</p>
        <p>Phone: (123) 456-7890</p>
      </div>

      <div class="footer-social">
        <h2>Follow Us</h2>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <!-- Add more social media links as needed -->
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>
