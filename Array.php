<?php
$nutrition = [
    'Fat' => 16,
    'Sugar' => 51,
    'Salt' => 6.3
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Beer Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>My Beer Store</h1>

<h2>Nutrition (per 100g)</h2>
<p>Fat: <?= $nutrition['Fat'] ?>%</p>
<p>Sugar: <?= $nutrition['Sugar'] ?>%</p>
<p>Salt: <?= $nutrition['Salt'] ?>%</p>

</body>
</html>

