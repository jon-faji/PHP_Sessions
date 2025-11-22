<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_SESSION['cart']) || !is_int($_SESSION['cart'])) {
        $_SESSION['cart'] = 0;
    }

    if (isset($_POST['add_to_cart'])) {
        
        $_SESSION['cart'] += 1;
    }
}

header('Location: cart.php');
exit;
