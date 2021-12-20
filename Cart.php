<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <script
      src="https://kit.fontawesome.com/ca405c1441.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="header">
      <div class="container">
      <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" />
                </div>
                <nav>
                    <ul id = "MenuItems"> 
                      <li><a href="index.html">Home</a></li>
                      <li><a href="product.php">Products</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="account.html">Account</a></li>
                
                    </ul>
                    <a href="cart.php">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <div class="menu-icon" onclick="menutoggle()"><img src="menu.png"></div>
        
        
                  </nav>
            </div>
        
      </div>
    </div>
    <!-- Cart items -->
    <div class="small-container cart">
      <table>
        <tr>
          <th>S.No.</th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Update</th>
          <th>Delete</th>
          <th>Subtotal</th>
        </tr>
        <?php
            $bill = 0;
            $sno = 1;
            $exact = 0;
            foreach ($_SESSION as $product) {
              // print_r($value);
              $p = 0;
              $q = 0;
              echo "<tr>";
              echo "<form action='editCart.php' method='post'>";

              echo "<td>$sno</td>";
              $sno++;

              foreach($product as $key => $value) {
                if($key == 2){
                  echo"<td><input name='name$key' type='number' value='$value'></input>";
                    $q = $value;
                    echo "</td>";
                }
                else if($key == 1){
                  echo"<input name='name$key' type='hidden' value='$value'></input>";
                  echo "<td>$value</td>";
                  $p = $value;
                  }
                  
                
            
                else if($key == 0){
                  
                  echo"<input name='name$key' type='hidden' value='$value'></input>";
                  echo "<td>$value</td>";
                  

                }
                
              }
              
              echo "<td><input type='submit' name='event' value='Update' class='btn'></input></td>";
              echo "<td><input type='submit' name='event' value='Remove' class='btn'></input></td>";
                  
              $bill = ($q * $p);
                echo"<td>$bill</td>";

              echo "</form>";
              $exact += $bill;
              echo "</tr>";

            }
        ?>

        <!-- <tr>
          <td>
              <div class="cart-info">
                  <img src="images/2GTshirt1.png" alt="">
                   <div>
                       <p>Roadster T-Shirt</p>
                       <small>Price: ₹550</small>
                       <br>
                       <a href="" >Remove</a>
                   </div>
                </div>
          </td>
          <td><input type="number" value="1" /></td>
          <td>₹850</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="images/cashoe1.jpeg" alt="">
                     <div>
                         <p>Casual Wear Shoes</p>
                         <small>Price: ₹550</small>
                         <br>
                         <a href="" >Remove</a>
                     </div>
                  </div>
            </td>
            <td><input type="number" value="1" /></td>
            <td>₹350</td>
          </tr> -->
      </table>
      <div class="total-price">
      
          <table>
              <tr>
                  <td>Subtotal</td>
                  <td><?php
                  echo"₹".$exact;
                  ?>
                  </td>
              </tr>
              <tr>
                <td>Tax</td>
                <td><?php
                  $tax = $exact * 0.18;
                  echo"₹".$tax;
                  ?>
                  </td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?php
                  echo"₹".($exact+$tax);
                  ?>
                  </td>
            </tr>
            
          </table>
          
      </div>
    </div>
<div class="checkout">
<input type="submit" name="checkout" value="Check out &#8594;" class="btn check"></input>

</div>

    <div class="foot-container">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/play-store.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo.png" />
            <p>
              Our Purpose Is To Sustainably Make the Pleasure and Benefits of
              Sports Accessible to the Many.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook</li>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="fcontainer">Copiright <i class="fa-solid fa-copyright"aria-hidden="true"></i>2021,www.w3fashion.com</div>
    </footer>
    <!-- Js for toggling menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight= "0px";
        function menutoggle(){
          if(MenuItems.style.maxHeight == "0px")
          {
            MenuItems.style.maxHeight = "200px";
          }
          else
          {
            MenuItems.style.maxHeight = "0px";
          }
        }
      </script>
  </body>
</html>