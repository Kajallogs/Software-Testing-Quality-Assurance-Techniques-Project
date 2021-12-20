<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3W Fashion E-commerce Website Design</title>
    <script src="https://kit.fontawesome.com/ca405c1441.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
</head>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" />
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.html">Account </a></li>
        
                    </ul>
                    <a href="cart.php">Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <div class="menu-icon" onclick="menutoggle()"><img src="menu.png"></div>
        
                </nav>
            </div>
        </div>
    </div>
    <!-- Product Display  -->
    <div class="lcontainer">
    <div class="pcontainer">
        <div class="row">
            <div class="col-4">
                    <img src="images/2GTshirt3.png" alt="">
                
            </div>
            <div class="col-4">
                    <img src="images/2GTshirt1.png" alt="">
                
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                    <img src="images/2GTshirt2.png" alt="">
                
            </div>
            <div class="col-4">
                    <img src="images/2GTshirt4.png" alt="">
                
            </div>
        </div>
        
    </div>
    <div class="pcontainer">
    <form action="insertCart.php" method="post">
        <h4>Lava Roadster T-Shirt <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></a></h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹550.00</p>
            <div class="discription">
            <input type="hidden" name="name" value="Lava Roadster T-Shirt">
                <input type="hidden" name="price" value="550"> 
                <input type="hidden" name="qty" value="1"> 
                
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, ea incidunt possimus sunt repellat fugiat molestiae culpa optio voluptatibus cum quidem odio dolor voluptatum id placeat dolorem explicabo corporis qui.
                <input type="submit" value="Add to Cart" name="addCart" class="btn" ></input>
                
            </div>
</form>        
    </div>
</div>
<div class="scontainer">
    <h2 class="title">Related Products </h2>
    <div class="row">
        <div class="col-4">
            <a href="1GT.php">
                <img src="images/1GTshirt1.png" alt="">
            <h4>Lava Roadster T-Shirt</h4>
            </a>
            
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹550.00</p>
        </div>
        <div class="col-4">
        <a href="1BT.php">
            <img src="images/1BTshirt1.png" alt="">
            <h4>Roadster T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹799.00</p>
            </a>
        </div>
        <div class="col-4">
        <a href="1kurta.php">
            <img src="images/1kurta1.png" alt="">
            <h4>Gerua Kurta and Chunri</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹900.00</p>
            </a>
        </div>
 <div class="col-4">
            <a href="2BT.php">
                <img src="images/2BTshirt1.png" >
            <h4>Lava Roadster BT-Shirt</h4>
            
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>₹750.00</p>
            </a>
        </div>
        </div>
      
    </div>
</div>
<footer>
    <div class="fcontainer">Copiright 2021,www.w3fashion.com</div> 
</footer>  
</body>
</html>