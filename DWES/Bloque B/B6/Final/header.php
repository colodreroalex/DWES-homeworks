<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de Buceo - Eventos</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #eef5fc;
        color: #333;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    h1 {
        text-align: center;
        color: #005bb5;
        margin-top: 20px;
    }

    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 25px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #ddd;
    }

    form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    form input[type="text"],
    form input[type="email"],
    form select,
    form input[type="checkbox"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1em;
        background-color: #f9f9f9;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form select:focus {
        border-color: #0073e6;
        box-shadow: 0 0 6px rgba(0, 115, 230, 0.5);
        outline: none;
    }

    form select {
        cursor: pointer;
    }

    form input[type="checkbox"] {
        width: auto;
        margin-right: 10px;
    }

    form input[type="submit"] {
        background-color: #0073e6;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1.1em;
        font-weight: bold;
        text-transform: uppercase;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    form input[type="submit"]:hover {
        background-color: #005bb5;
        transform: scale(1.05);
    }

    form input[type="submit"]:active {
        background-color: #003f8c;
        transform: scale(1);
    }

    h2 {
        text-align: center;
        margin-top: 30px;
        color: #333;
    }

    ul {
        max-width: 600px;
        margin: 0 auto;
        padding: 0;
        list-style: none;
    }

    ul li {
        background: #ffdddd;
        color: #d8000c;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #d8000c;
        border-radius: 6px;
    }

    ul li:first-child {
        background: #e8f5e9;
        color: #388e3c;
        border-color: #388e3c;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.8em;
        }

        form {
            padding: 20px;
        }

        form input[type="submit"] {
            font-size: 1em;
        }
    }
</style>

</head>
