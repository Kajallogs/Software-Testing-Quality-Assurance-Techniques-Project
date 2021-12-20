<?php
   session_start();
   $name = $_POST['name'];
   $price = $_POST['price'];
   $quantity = $_POST['qty'];

   $product = array($name,$price,$quantity);

//    print_r($product);
   $_SESSION[$name] = $product;
   header('location:index.html')
?>