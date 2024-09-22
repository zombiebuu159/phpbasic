<?php include '../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Static/css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
        <!-- Formulario para el Rectángulo -->
    <div class="form-container">
        <h2>Área del Rectángulo</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="rectangulo">
            <label for="base">Base:</label>
            <input name="base" type="number" required />
            <label for="altura">Altura:</label>
            <input name="altura" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Cuadrado -->
    <div class="form-container">
        <h2>Área del Cuadrado</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="cuadrado">
            <label for="lado">Lado:</label>
            <input name="lado" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Círculo -->
    <div class="form-container">
        <h2>Área del Círculo</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="circulo">
            <label for="radio">Radio:</label>
            <input name="radio" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Triángulo -->
    <div class="form-container">
        <h2>Área del Triángulo</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="triangulo">
            <label for="base">Base:</label>
            <input name="base" type="number" required />
            <label for="altura">Altura:</label>
            <input name="altura" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Cilindro -->
    <div class="form-container">
        <h2>Volumen del Cilindro</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="cilindro">
            <label for="radio">Radio:</label>
            <input name="radio" type="number" required />
            <label for="altura">Altura:</label>
            <input name="altura" type="number" required />
            <input type="submit" value="Calcular Volumen">
        </form>
    </div>

    <!-- Formulario para el Trapecio -->
    <div class="form-container">
        <h2>Área del Trapecio</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="trapecio">
            <label for="base_mayor">Base Mayor:</label>
            <input name="base_mayor" type="number" required />
            <label for="base_menor">Base Menor:</label>
            <input name="base_menor" type="number" required />
            <label for="altura">Altura:</label>
            <input name="altura" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Rombo -->
    <div class="form-container">
        <h2>Área del Rombo</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="rombo">
            <label for="diagonal_mayor">Diagonal Mayor:</label>
            <input name="diagonal_mayor" type="number" required />
            <label for="diagonal_menor">Diagonal Menor:</label>
            <input name="diagonal_menor" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Pentágono -->
    <div class="form-container">
        <h2>Área del Pentágono</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="pentagono">
            <label for="perimetro">Perímetro:</label>
            <input name="perimetro" type="number" required />
            <label for="apotema">Apotema:</label>
            <input name="apotema" type="number" required />
            <input type="submit" value="Calcular Área">
        </form>
    </div>

    <!-- Formulario para el Cubo -->
    <div class="form-container">
        <h2>Volumen del Cubo</h2>
        <form action="area.php" method="post">
            <input type="hidden" name="figura" value="cubo">
            <label for="lado">Lado:</label>
            <input name="lado" type="number" required />
            <input type="submit" value="Calcular Volumen">
        </form>
    </div>
</body>
</html>