<?php
include 'include/functions.php';

$nutrition = [
    'Fat'   => 16,
    'Sugar' => 51,
    'Salt'  => 6.3,
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Beer Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/nav.php'; ?>

<h1>My Beer Store</h1>

<h2>Nutrition (per 100G)</h2>

<p>Fat: <?= $nutrition['Fat'] ?>%
<?php if ($nutrition['Fat'] > 15) echo " High Fat!"; ?>
</p>

<p>Sugar: <?= $nutrition['Sugar'] ?>%
<?php if ($nutrition['Sugar'] > 50) echo " High Sugar!"; ?>
</p>

<p>Salt: <?= $nutrition['Salt'] ?>%
<?php if ($nutrition['Salt'] > 5) echo " High Salt!"; ?>
</p>

</body>
</html>
