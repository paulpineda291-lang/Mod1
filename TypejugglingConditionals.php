<?php
$items = 3;
$cost = 5;

$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;


$bonus = "5";       
$total += $bonus;    

$discount = 0;
if ($subtotal > 20) {
    $discount = $subtotal * 0.1; 
    $total -= $discount;
}

$warning = "";
if ($items > 10) {
    $warning = " You are buying a large quantity!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Beer Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Welcome to My Beer Store</h1>

<h2>Shopping Cart</h2>
<p>Number of Bottles: <?= $items ?> <?= $warning ?></p>
<p>Cost per Bottle: $<?= $cost ?></p>
<p>Subtotal: $<?= $subtotal ?></p>
<p>Tax (20%): $<?= $tax ?></p>


<?php if ($discount > 0): ?>
<p>Discount: $<?= $discount ?> ✅</p>
<?php endif; ?>

<p><strong>Total: $<?= $total ?></strong></p>

<h2>Store Info</h2>
<p>We offer a wide selection of craft beers from around the world.</p>

<h2>Customer Support</h2>
<p>Need help? Contact us at 
<a href="mailto:support@mybeershop.com">support@mybeershop.com</a></p>

</body>
</html>
