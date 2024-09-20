<?php include 'includes/header.php'  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: white;
        }

        h1 {
            margin-bottom: 20px;
        }

        nav {
            margin: 20px;
            text-align: center;
            
        }

        ul {
            list-style-type: none;
        }

        li {
            margin: 10px 0;
            padding: 1rem;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="menu">
        <header>
            <h1>Seleccione una figura para calcular su área</h1>
        </header>
        <nav>
            <ul>
                <li><a href="triangulo.html">Triángulo</a></li>
                <li><a href="cuadrado.html">Cuadrado</a></li>
                <li><a href="circulo.html">Círculo</a></li>
                <li><a href="rectangulo.html">Rectángulo</a></li>
            </ul>
        </nav>
    </div>
    
</body>

</html>