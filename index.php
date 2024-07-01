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
            <h4 class="Purchase">Add to cart</h4>
            <div class="Purchase-body">
              <p class="Purchase-text">Thanks for choosing us! Let us know if you have any questions along the way.
            </p>
              <a href="order.php" class="btn btn-primary">One click away</a>
            </div>
          </div>

         
           <div class="Purchase" style="width:300px">
            <img src="images/f2.jpeg" alt="">
            <div class="Purchase-body">
                <h4 class="Purchase-title">Head to checkout</h4>
              <p class="Purchase-text">Find items at your convinience  
            </p>
              <a href="order.php" class="btn btn-primary">One click away</a>
            </div>
          </div>

         
           <div class="Purchase" style="width:300px">
            <img src="images/f3.jpeg" alt="" >
            <div class="Purchase-body">
                <h4 class="Purchase-title">add payment method</h4>
              <p class="Purchase-text">Add your  preffered method of payment
               
            </p>
              <a href="order.php" class="btn btn-primary">One click away</a>
            </div>
          </div>

        
          
           <div class = "container">
            <div class = "row">

           <h4>Product details  </h4>

           <table class = "table table-stripped table-border" cellpadding ="border:3px" style = "border:1px solid !important;
           border-collapse:collapse;">
            <tr>
                 
                <th>type of product</th>
                <th>price</th>
                <th>reviews </th>
                
            </tr>
            <tr>
                <td>Shower Gel</td>
                <td>600</td>
                <td>5star</td>
                
    
            </tr>
            <tr>
                <td>Headphones</td>
                <td>3500</td>
                <td>3star</td>
                
            </tr>
            <tr>
                <td>Dumbells</td>
                <td>7000</td>
                <td>4star</td>
                
            </tr>
            <tr>
                <td>Showl</td>
                <td>500</td>
                <td>6star</td>
               
            </tr>

           </table>

        </div>
       </div>

       <?php include_once("Templates/footer.php"); ?>