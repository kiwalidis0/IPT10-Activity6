<?php
session_start();
require "products.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="cart.css">
    </head>
    <body>
        <h1>Your Cart</h1>
        <ul>
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <li><?php echo $item['name']; ?> - <?php echo $item['price']; ?> PHP</li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Wow such empty.</li>
            <?php endif; ?>
        </ul>

        <a href="reset-cart.php">Clear my cart</a>
        <a href="place-order.php">Place the order</a>
    </body>
</html>
