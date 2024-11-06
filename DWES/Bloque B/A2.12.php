<?php
$best_sellers = ['Toffee', 'Mints', 'Fudge', 'Lollipop', 'Gum']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loop - just accessing values</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Best sellers</h2>
    <?php foreach($best_sellers as $candy) { ?>
        <p><?= $candy ?></p>
    <?php }?>

    
</body>
</html>