<?php

include 'Vehicle.php';
include 'Fleet.php';

//Cree las instancias de Vehicle dentro del array de Vehiculos de Fleet
$parking = new Fleet('Parking Ayuntamiento');

$vehicle1 = new Vehicle("Audi", "A3", "1234ABC", true);
$vehicle2 = new Vehicle("BMW", "Serie 1", "1234ABC", false);
$vehicle3 = new Vehicle("Mercedes", "Clase A", "1234ABC", true);
$vehicle4 = new Vehicle("Seat", "Ibiza", "1234ABC", false);

$parking->addVehicles($vehicle1);
$parking->addVehicles($vehicle2);
$parking->addVehicles($vehicle3);
$parking->addVehicles($vehicle4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion del parking</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Page Styles */
        h1,
        h2 {
            text-align: center;
            color: #2c3e50;
        }

        h1 {
            margin-top: 20px;
            font-size: 2.5rem;
        }

        h2 {
            margin-top: 30px;
            font-size: 1.8rem;
        }

        /* Table Styles */
        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td {
            font-size: 0.9rem;
            color: #555;
            border-bottom: 1px solid #eaeaea;
        }

        td:last-child {
            text-align: center;
        }

        /* Footer Style */
        footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>

<body>
    <h1>" <?= $parking->name ?>  "</h1>
    <h2> All vehicles </h2>
    <table border=1>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Plate</th>
            <th>Available</th>
        </tr>
        <?php foreach ($parking->listVehicles() as $vehicle): ?>
            <tr>
                <td><?= $vehicle->make; ?></td>
                <td><?= $vehicle->model; ?></td>
                <td><?= $vehicle->plate; ?></td>
                <td><?= $vehicle->available ? 'Yes' : 'No'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h2> Available Vehicles </h2>
    <table border=1>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Plate</th>
            <th>Available</th>
        </tr>
        <?php foreach ($parking->listAvaiableVehicles() as $vehicle): ?>
            <tr>
                <td><?= $vehicle->make; ?></td>
                <td><?= $vehicle->model; ?></td>
                <td><?= $vehicle->plate; ?></td>
                <td><?= $vehicle->available ? 'Yes' : 'No'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>