<?php

session_start();
// Use an integer counter for cart items
if (isset($_SESSION['cart']) && is_int($_SESSION['cart'])) {
    $cart_items = $_SESSION['cart'];
} else {
    $cart_items = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Items in Cart: </h2>
    <p><?php echo htmlspecialchars((string)$cart_items, ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="cart.html">Back</a>
    
</body>
</html>