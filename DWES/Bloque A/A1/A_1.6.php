<?php
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 83]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>The candy Store</h1>
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name'] ?> - <?php echo $offers[0]['price'] ?></p>
    <p><?php echo $offers[1]['name'] ?> - <?php echo $offers[1]['price'] ?></p>
    <p><?php echo $offers[2]['name'] ?> - <?php echo $offers[2]['price'] ?></p>
    <p><?php echo $offers[3]['name'] ?> - <?php echo $offers[3]['price'] ?></p>

    <br>

    <!-- Indage un poco sobre como hacer un buble foreach para mostrar todos los elementos del array sin importar cuantos hay -->

    <?php foreach ($offers as $offer): ?>
        <p> <?php echo $offer['name'] ?> - <?php echo $offer['price'] ?>
    <?php endforeach; ?>

</body>

</html>