<?php
$price = 1.99;
?>
<!DOCTYPE html>
<html>
<head>
    <title>for Loop - higher counter</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
        for ($i = 0; $i <= 200; $i = $i + 10) {
            echo $i;
            echo ' packs cost $';
            echo $price * $i;
            echo '<br>';
        }
        ?>
    </p>
</body>
</html>
