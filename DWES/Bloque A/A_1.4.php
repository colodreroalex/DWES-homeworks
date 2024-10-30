<?php

$best_sellers = array(
    'Chocolate', 
    'Mints', 
    'Fudge',
    'One more',
    'Bubble Gum',
    'Toffee', 
    'Jelly beans'
    
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Best sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0] ?></li>
        <li><?php echo $best_sellers[1] ?></li>
        <li><?php echo $best_sellers[2] ?></li>
        <li><?php echo $best_sellers[4] ?></li>
        <li><?php echo $best_sellers[5] ?></li>
    </ul>
</body>
</html>