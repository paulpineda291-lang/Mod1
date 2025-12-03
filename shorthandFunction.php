<?php
include 'include/functions.php';

$name = "Paul";
$favorites = ["RH", "Alfe", "BB"];
$alcoholLevels = [4.5, 5.0, 4.8];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Beer Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'include/nav.php'; ?>

<h1>Welcome to My Beer Store</h1>

<p>Hello <?= $name ?>, your favorite type of beer is <strong><?= $favorites[0] ?></strong>.</p>

<h2>Top Picks</h2>
<ul>
    <?php foreach($favorites as $index => $beer): ?>
        <li>
            <?= $beer ?>
            <?php 
            if ($alcoholLevels[$index] > 5) {
                echo "Strong Alcohol!";
            }
            ?>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Beer Nutrition Highlights</h2>

<table>
    <tr>
        <th>Type</th>
        <th>Calories</th>
        <th>Carbs</th>
        <th>Alcohol %</th>
    </tr>

    <?php foreach($favorites as $index => $beer): ?>
    <tr>
        <td>
            <?= $beer ?>
            <?php if ($index === 0) echo "Favorite!"; ?>
        </td>
        <td>
            <?php $calories = [43, 50, 47]; echo $calories[$index]; ?>
        </td>
        <td>
            <?php $carbs = ["3.6g", "4.2g", "3.9g"]; echo $carbs[$index]; ?>
        </td>
        <td><?= $alcoholLevels[$index] ?>%</td>
    </tr>
    <?php endforeach; ?>
</table>

<footer>
    <p>Cheers, <?= $name ?>! Enjoy responsibly.</p>
</footer>

</body>
</html>
