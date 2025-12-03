<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Beer Store</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Welcome to My Beer Store</h1>

<h2>Shopping Cart</h2>
<p>Number of Bottles: <?= $items ?></p>
<p>Cost per Bottle: $<?= $cost ?></p>
<p>Subtotal: $<?= $subtotal ?></p>
<p>Tax (20%): $<?= $tax ?></p>
<p><strong>Total: $<?= $total ?></strong></p>

<h2>Store Info</h2>
<p>We offer a wide selection of craft beers from around the world.</p>
<p>Visit us for seasonal specials and exclusive brews!</p>

<h2>Customer Support</h2>
<p>Need help? Contact us at <a href="mailto:support@mybeerstore.com">support@mybeerstore.com</a>.</p>

</body>
</html>
