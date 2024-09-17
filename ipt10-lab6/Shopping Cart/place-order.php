<?php
session_start();
require "products.php";

$order_code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);

$date_time = date('Y-m-d H:i:s');
$order_items = $_SESSION['cart'];
$total_price = 0;
$order_summary = "Order Code: $order_code\nDate and Time: $date_time\n\nOrder Items:\n";

foreach ($order_items as $item) {
    $order_summary .= "Product ID: " . $item['id'] . " | Name: " . $item['name'] . " | Price: " . $item['price'] . " PHP\n";
    $total_price += $item['price'];
}

$order_summary .= "\nTotal Price: $total_price PHP\n";

file_put_contents("orders-$order_code.txt", $order_summary);

$_SESSION['cart'] = [];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Order Confirmation</title>
        <link rel="stylesheet" href="place-order.css">
    </head>
    <body>
        <h1>Order Confirmation</h1>
        <p>Thank you for your order! Your order code is: <strong><?php echo $order_code; ?></strong></p>
        <pre><?php echo $order_summary; ?></pre>
    </body>
</html>
