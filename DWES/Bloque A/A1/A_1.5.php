<?php

// Your PHP code starts here
$nutrition = [
    'fat' => 42, 
    'sugar' => 60,
    'salt' => 3.5
];
$nutrition['fat'] = 36; 
$nutrition['fiber'] = 2.1; 
$nutrition['protein'] = 7.3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando valores almacenados en array</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Nutrition (per 100g) </h2>
    <p>Fat: <?php echo $nutrition['fat']; ?> %</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?> %</p>
    <p>Salt: <?php echo $nutrition['salt']; ?> %</p>
    <p>Fiber: <?php echo $nutrition['fiber']; ?> %</p>
</body>
</html>