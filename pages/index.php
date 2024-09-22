
<?php include '../includes/header.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Páginas</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex; /* Para colocar los menús uno al lado del otro */
        }

        nav {
            width: 200px;
            background-color: #333;
            height: 100vh; /* Para que ambos menús ocupen toda la altura de la pantalla */
            position: relative;
        }

        .menu-vertical {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column; /* Coloca los elementos en vertical */
        }

        .menu-vertical li {
            margin: 0;
        }

        .menu-vertical li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 15px;
            display: block;
            transition: background-color 0.3s ease;
        }

        .menu-vertical li a:hover {
            background-color: #555;
        }

        /* Colores diferentes para cada menú */
        .menu-1 {
            background-color: #333; /* Color del primer menú */
        }

        .menu-2 {
            background-color: #555; /* Color del segundo menú */
        }

        @media (max-width: 600px) {
            .container {
                flex-direction: column; /* En pantallas pequeñas, los menús se apilan */
            }

            nav {
                width: 100%; /* Ocupan todo el ancho en pantallas pequeñas */
                height: auto;
            }

            .menu-vertical li a {
                padding: 10px; /* Reduce el padding en pantallas pequeñas */
            }
        }

    </style>
</head>
<body>
    <h1>Menu</h1>
    <div class="container">
        <nav class="menu-1">
            <ul class="menu-vertical">
                <li><a href="page1.php">Mi primera cadena</a></li>
                <li><a href="page2.php">Variables</a></li>
                <li><a href="page3.php">Concatenacion</a></li>
                <li><a href="page4.php">Concatenacion sin punto</a></li>
                <li><a href="page5.php">Operaciones aritmeticas</a></li>
                <li><a href="page6.php">Estructuras de control</a></li>
                <li><a href="page7.php">Estructuras de control switch</a></li>
                <li><a href="page8.php">Arreglos</a></li>
                <li><a href="page9.php">Arreglos 2</a></li>
            </ul>
        </nav>
        
        <nav class="menu-2">
            <ul class="menu-vertical">
                <li><a href="page10.php">Estructuras ciclicas</a></li>
                <li><a href="page11.php">Fecha de Nacimiento</a></li>
                <li><a href="page12Conversor.php">Conversor</a></li>
                <li><a href="page13Jugeteria.php">Jugueteria</a></li>
                <li><a href="page14.php">Mayusculas y minúsculas</a></li>
                <li><a href="page15Figuras.php">Figuras</a></li>
                <li><a href="page16Salario.php">Salario</a></li>
                <li><a href="interfaces01.php">Inferfaces</a></li>
            </ul>
        </nav>
    </div>
</body>
    
</html>

