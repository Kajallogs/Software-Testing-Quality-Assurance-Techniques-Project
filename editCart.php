<?php
    session_start();

    $name = $_POST['name0'];
    $price = $_POST['name1'];
    $quantity = $_POST['name2'];

    $event = $_POST['event'];
    $product = array($name,$price,$quantity);

    if($event == 'Update'){
        $_SESSION[$name] = $product;
    }
    else if($event == "Remove"){
        unset($_SESSION[$name]);
    }

    header('location:cart.php');



?>