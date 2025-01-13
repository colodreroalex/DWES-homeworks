<?php
$cities = [
    'London',
    'Sydney' ,
    'NYC',
    'Tokio'
];

$city = $_GET['city'] ?? '';


if ($city) {
    $address = $cities[$city];
} else {
    $address = 'Please select a city';
}
?>

<?php foreach ($cities as $value) { ?>
    <a href="get-2.php?city=<?= $value ?>"><?= $value ?></a>
<?php } ?>

<h1><?= $city ?></h1>
<p><?= $address ?></p>
