<?php include_once ("Templates/header.php"); ?>
<?php include_once ("Templates/nav.php"); ?>
<?php include_once ("Templates/drop.php"); ?>
   
<div class="banner">
    <h1>HomePage</h1>
</div>

<div  class="row">
    <div class="content">

    <p>Welcome to ClickCart, your one-stop shop for ALL your needs. We're passionate about curating a collection of high-quality products that cater to your unique needs and style <br>
    . Explore our latest arrivals, discover special offers, and enjoy a seamless shopping experience from the comfort of your own home.<br>
     We're committed to providing exceptional customer service and ensuring your satisfaction every step of the way. Start browsing now and find your perfect pieces!</p>

        <img width="550" height="450">
            <img src="images/f1.jpeg">

        <img width="550" height="450">
            <img src="images/f2.jpeg">

         <img width="550" height="450">
            <img src="images/f3.jpeg">
            
           
</images>
    
           <h4>Categories of products;</h4>
           <ul>
            <li>Health and Beauty</li>
            <li>Home and Office</li>
            <li>Sporting Goods</li>
            <li>Garden and Outdoors</li>
           </ul>


            <div class="container">
            <div class="row">
           <div class="Purchase" style="width:300px">
            <img src="images/f1.jpeg" alt="">
            <h4 class="Purchase"></h4>
            <div class="Purchase-body">
              <p class="Purchase-text">Thanks for choosing us! Let us know if you have any questions along the way.
            </p>
              <a href="order.php" class="btn btn-primary">One click away</a>
            </div>
          </div>

         
           <div class="card" style="width:300px">
            <img src="images/realtor3.jpeg" alt="">
            <div class="card-body">
                <h4 class="card-title">finding an eXps </h4>
              <p class="card-text">Whether you are looking to buy, sell or rent, our experienced and passionate<br>
                agents are on hand to help make it happen. Find the perfect agent for your needs today!   
            </p>
              <a href="agent.php" class="btn btn-primary">find an agent</a>
            </div>
          </div>

         
           <div class="card" style="width:300px">
            <img src="images/money4.jpeg" alt="" >
            <div class="card-body">
                <h4 class="card-title">cash offers</h4>
              <p class="card-text">Discover how you can get cash offers quickly on your home without staging or listing <br>
                . Our Express Offers platform easily connects individual home owners with investors <br>
                
               
            </p>
              <a href="payment.php" class="btn btn-primary">Get A Cash Offer</a>
            </div>
          </div>

        
          
           <div class = "container">
            <div class = "row">

           <h4>HOUSE DETAILS AND BUYING PRICE:</h4>

           <table class = "table table-stripped table-border" cellpadding ="border:3px" style = "border:1px solid !important;
           border-collapse:collapse;">
            <tr>
                 
                <th>type of house</th>
                <th>location</th>
                <th>bedrooms</th>
                <th>price</th>
            </tr>
            <tr>
                <td>Mansion</td>
                <td>Lower kabete</td>
                <td>6</td>
                <td>149,000,000</td>
    
            </tr>
            <tr>
                <td>Apartments</td>
                <td>westlands</td>
                <td>2</td>
                <td>12,000,000</td>
            </tr>
            <tr>
                <td>Townhome</td>
                <td>parklands</td>
                <td>3</td>
                <td>20,000,000</td>
            </tr>
            <tr>
                <td>Bungalow</td>
                <td>Kitusuru</td>
                <td>5</td>
                <td>100,000,000</td>
            </tr>

           </table>

        </div>
       </div>

       <?php include_once("templates/footer.php"); ?>