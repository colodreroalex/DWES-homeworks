<?php
$day = 'Wednesday';

$offer = match($day) {
    'Monday'               => '20% off chocolates',
    'Saturday', 'Sunday'   => '20% off mints',
    'Tuesday',             => '20% off gummies',
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>match Expression</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
</html>
