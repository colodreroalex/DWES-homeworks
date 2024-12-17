<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 15px;
            animation: fadeInDown 1s ease;
        }

        p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
            animation: fadeIn 1s ease;
        }

        a {
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(52, 152, 219, 0.2);
        }

        a:hover {
            background-color: #2980b9;
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(52, 152, 219, 0.3);
        }

        /* ANIMACIONES */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            a {
                font-size: 0.9rem;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <h1>¡Interés agregado con éxito!</h1>
    <p>Gracias por compartir tus intereses. Vuelve a la <a href="main.php">página principal</a> para ver la lista actualizada.</p>
</body>
</html>
