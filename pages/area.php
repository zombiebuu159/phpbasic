<?php include '../includes/header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $figura = $_POST['figura'];
    $resultado = "";

    // Calcula el área o volumen según la figura seleccionada
    if ($figura === 'rectangulo') {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $resultado = "El área del rectángulo es: " . ($base * $altura) . " cm²";
    } elseif ($figura === 'cuadrado') {
        $lado = $_POST['lado'];
        $resultado = "El área del cuadrado es: " . pow($lado, 2) . " cm²";
    } elseif ($figura === 'circulo') {
        $radio = $_POST['radio'];
        $resultado = "El área del círculo es: " . (pi() * pow($radio, 2)) . " cm²";
    } elseif ($figura === 'triangulo') {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $resultado = "El área del triángulo es: " . (($base * $altura) / 2) . " cm²";
    } elseif ($figura === 'cilindro') {
        $radio = $_POST['radio'];
        $altura = $_POST['altura'];
        $resultado = "El volumen del cilindro es: " . (pi() * pow($radio, 2) * $altura) . " cm³";
    } elseif ($figura === 'trapecio') {
        $base_mayor = $_POST['base_mayor'];
        $base_menor = $_POST['base_menor'];
        $altura = $_POST['altura'];
        $resultado = "El área del trapecio es: " . ((($base_mayor + $base_menor) * $altura) / 2) . " cm²";
    } elseif ($figura === 'rombo') {
        $diagonal_mayor = $_POST['diagonal_mayor'];
        $diagonal_menor = $_POST['diagonal_menor'];
        $resultado = "El área del rombo es: " . (($diagonal_mayor * $diagonal_menor) / 2) . " cm²";
    } elseif ($figura === 'pentagono') {
        $perimetro = $_POST['perimetro'];
        $apotema = $_POST['apotema'];
        $resultado = "El área del pentágono es: " . (($perimetro * $apotema) / 2) . " cm²";
    } elseif ($figura === 'cubo') {
        $lado = $_POST['lado'];
        $resultado = "El volumen del cubo es: " . pow($lado, 3) . " cm³";
    }

    // Muestra el resultado
    echo "<div class='resultado-container'>
            <div class='resultado'>
                <p><strong>$resultado</strong></p>
            </div>
          </div>";
}
?>