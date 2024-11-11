<?php

// Your PHP code starts here
$name = "Alex"; 
$favourites = ['Kinder Bueno','Toffee','Fudge'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Welcome <?= $name;?> </h2>
    <p>Your favourite type of candy is
    <?= $favourites[0] ?>. 
    </p>
</body>
</html>