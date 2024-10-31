<?php 

$prefix = 'Thank you '; 
$name = 'Alex'; 
$message = "$prefix , $name '!'"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
</head>
<body>
    <h1>The candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>
</body>
</html>