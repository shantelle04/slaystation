1
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharma Landing Page</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .logo img {
      max-width: 50%;
      height: auto;
    }
    .container {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
    }
    .search-bar {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }
    .search-bar input[type="text"] {
      flex-grow: 1;
      padding: 8px;
      font-size: 16px;
    }
    .search-bar button {
      padding: 8px 12px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }

    /* Transitions */
    section {
      transition: background-image 0.5s ease;
      min-height: 100vh;
      margin-bottom: 50px;
    }

    /* Background Images */
    #hero {
      background-image: url('back1.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      overflow: hidden;
    }

    #revolutionize {
      background-image: url('back2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      overflow: hidden;
    }

    #difference {
      background-image: url('back3.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      overflow: hidden;
    }

    #ourteam {
      background-image: url('team.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      overflow: hidden;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 100px 0;
      color: #fff;
      animation: fadeIn 1s ease-in-out;
    }

    .hero-content h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
      letter-spacing: 2px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      animation: slideUp 1s ease-in-out;
    }

    .hero-content p {
      font-size: 24px;
      max-width: 600px;
      margin: 0 auto 40px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      animation: slideUp 1s ease-in-out;
    }

    .hero-content .btn {
      padding: 12px 24px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      position: relative;
      z-index: 2;
      animation: slideUp 1s ease-in-out;
    }

    .hero-content .btn:hover {
      background-color: #45A048;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @keyframes slideUp {
      0% {
        transform: translateY(20px);
      }
      100% {
        transform: translateY(0);
      }
    }
    #testimonials {
      background-color: #f9f9f9;
    }

    .testimonial-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .testimonial-item {
      width: 300px;
      padding: 20px;
      margin: 20px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      text-align: center;
    }

    .testimonial-item img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .testimonial-item h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .testimonial-item .rating {
      color: #f1c40f;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .testimonial-item p {
      font-size: 16px;
      color: #777;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <img src="logo.png.jpeg" alt="Pharma Logo">
      </div>
      <ul class="menu">
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="../LOGINSALEH/register.php" class="btn">Sign Up</a></li>
        <li><a href="../LOGINSALEH/login.php" class="btn">Login</a></li>
      </ul>
      <style>

        img[alt="Pharma Logo"] {
        height: 100px;
        width: 180px;
        padding-left: 2%;
        border-radius: 70%;
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
          /* Style for the hero section with background photo */
    
</style>
    </nav>
  </header>

  <section id="hero">
    <div class="hero-content">
      <h1>Welcome to E-DAWA</h1>
      <p>Your trusted source for high-quality pharmaceutical products.</p>
      <a href="../LOGINSALEH/register.php" class="btn">JOIN US TODAY</a>
    </div>
  </section>

  <section id="revolutionize">
    <div class="hero-content">
      <h1>Revolutionize Your Industry</h1>
      <p>Introducing our groundbreaking products and services.</p>
      <a href="services.php" class="btn">Explore Our Services Now</a>
    </div>
  </section>

  <section id="ourteam">
    <div class="hero-content">
      <h1>Our Team, Your Heroes</h1>
      <p>Collaborate with our dedicated team to overcome any challenge.</p>
      <a href="team_photos.php" class="btn">SEE MORE</a>
    </div>
  </section>

  <section id="partnership">
  <div class="container">
    <div class="partnership-content">
      <div class="partnership-header">
        <h2>Our Partnerships</h2>
        <p>Discover our trusted partners</p>
      </div>
      <div class="partnership-images">
        <img src="partner1.jpg" alt="Partner 1">
        <img src="partner2.png" alt="Partner 2">
        <!-- Add more partner images as needed -->
      </div>
      <div class="partnership-text">
        <p>At E-DAWA, we believe in collaboration. We have formed strong partnerships with leading healthcare organizations and research institutions worldwide. Together, we work towards a healthier and brighter future for all.</p>
        <p>Interested in becoming our partner? Contact us today to explore potential collaborations.</p>
        <a href="partnership.php" class="btn">SEE MORE</a>
      </div>
    </div>
  </div>
  <style>
    /* ... Existing styles ... */

    /* Style for the Partnership section */
    #partnership {
      background-color: bisque;
      padding: 60px 0;
    }

    .partnership-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: right;
    }

    .partnership-header {
      flex: 1;
      max-width: 500px;
      padding: 20px;
    }

    .partnership-header h2 {
      font-size: 36px;
      font-weight: bold;
      color: whitesmoke;
      margin-bottom: 10px;
    }

    .partnership-header p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }

    .partnership-images {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .partnership-images img {
      max-width: 200px;
      height: auto;
      margin: 20px;
    }

    .partnership-text {
      flex: 1;
      max-width: 500px;
      padding: 20px;
    }

    .partnership-text p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .partnership-text .btn {
      padding: 12px 24px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    .partnership-text .btn:hover {
      background-color: #45A048;
    }

    /* ... Existing styles ... */
  </style>
</section>

  
  <section id="testimonials">
    <div class="container">
      <h2>Testimonials</h2>
      <div class="testimonial-container">
        <div class="testimonial-item">
          <img src="walter.jpg" alt="Customer 1">
          <h3>John Doe</h3>
          <div class="rating">★★★★★</div>
          <p>I've been using this product for a few weeks now, and I must say I'm impressed! It's easy to use and has made a significant difference in my daily routine.</p>
        </div>
        <div class="testimonial-item">
          <img src="pheebs.jpg" alt="Customer 2">
          <h3>Jane Smith</h3>
          <div class="rating">★★★★☆</div>
          <p>I was a bit skeptical at first, but after trying out this service, I can confidently say it's worth every penny. The customer support is excellent, and the results are amazing!</p>
        </div>
        <!-- Add more testimonials as needed -->
      </div>
    </div>
  </section>


  <section id="health_benefits">
    <div class="container">
      <h2>Health Living Tips</h2>
      <div class="benefits-container">
        <div class="benefit">
          <img src="exercising.jpg" alt="Exercising">
          <p><strong>Exercising:</strong> Regular physical activity, such as cardiovascular exercises, strength training, and flexibility exercises, can have numerous health benefits, including:</p>
          <ul>
            <li>Improved cardiovascular health</li>
            <li>Enhanced muscle strength and endurance</li>
            <li>Weight management and body fat reduction</li>
            <li>Better mood and reduced stress levels</li>
            <li>Improved sleep quality</li>
            <li>Enhanced immune system</li>
            <li>Reduced risk of chronic diseases, such as heart disease, diabetes, and certain cancers</li>
          </ul>
        </div>
        <div class="benefit">
          <img src="water.jpg" alt="Water">
          <p><strong>Taking Enough Water Everyday:</strong> Staying hydrated by drinking enough water each day is essential for maintaining good health. The benefits of proper hydration include:</p>
          <ul>
            <li>Regulation of body temperature</li>
            <li>Supporting nutrient absorption and digestion</li>
            <li>Flushing out toxins and waste products</li>
            <li>Improving skin health and appearance</li>
            <li>Preventing dehydration and associated symptoms</li>
            <li>Supporting joint health</li>
            <li>Boosting energy levels and reducing fatigue</li>
          </ul>
        </div>
        <div class="benefit">
          <img src="checkups.jpg" alt="Regular Checkups">
          <p><strong>Regular Checkups:</strong> Getting regular checkups and health screenings is crucial for preventive care and early detection of potential health issues. Some benefits of regular checkups include:</p>
          <ul>
            <li>Early detection and management of chronic conditions</li>
            <li>Identification of risk factors and lifestyle modifications</li>
            <li>Monitoring overall health and well-being</li>
            <li>Improved management of existing health conditions</li>
            <li>Opportunity to discuss health concerns with healthcare professionals</li>
            <li>Peace of mind and reduced health-related anxiety</li>
            <li>Better understanding of one's health status and health goals</li>
          </ul>
        </div>
      </div>
    </div>
    <style>
    /* Your CSS styles here */
    

    .benefits-container {
        display: flex;
        flex-direction: column;
    }

    .benefit {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .benefit img {
        width: 200px; /* Adjust the image size as needed */
        /* Add any desired styles for the image */
    }

    .benefit-content {
        flex: 1;
        padding-left: 20px; /* Add spacing between the image and text */
    }

  
</style>
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
  <style>
    /* Your existing styles here */

/* Your footer styles here */
footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.footer-links a,
.footer-social a {
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
}

.footer-links a:hover,
.footer-social a:hover {
  color: #4CAF50;
}

  </style>
</footer>

</body>
</html>
