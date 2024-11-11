<?php
$stock = 0;
$ordered = 3; 

if($stock > 0){
    $message = 'In stock';
}
elseif ($ordered > 0){
    $message = 'comming soon';
}
else{
    $message = 'Sold out';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF-else</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Chocolate </h2>
    <p><?= $message ?></p>
</body>
</html>