<?php

// Your PHP code starts here
$nutrition = [
    'protein' => 2.6,
    'fat' => 42, 
    'sugar' => 60,
    'salt' => 3.5
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Nutrition (per 100g) </h2>
    <p>Fat: <?php echo $nutrition['fat'];?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar'];?>%</p>
    <p>Salt: <?php echo $nutrition['salt'];?>%</p>
    <p>Protein: <?php echo $nutrition['protein']?>%</p>
    
</body>
</html>