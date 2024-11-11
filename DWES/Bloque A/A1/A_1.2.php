<?php

// Your PHP code starts here
$name = "Alex"; 
$price = "2"; 
$name = "Juan";

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
    <h2>Welcome <?php echo $name;?> </h2>
    <p>The cost of the candy is 
    <?php echo $price;?> per pack.
    </p>
</body>
</html>