<?php
$cities = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC' => '1242 7th Street, 10492',
    'Tokio' => '1242 7th Street, 10492',
];
$city = $_GET['city'] ?? '';
$addres = $cities[$city];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La calle es : <?= htmlspecialchars($addres) ?></p>
</body>
</html>