<?php include '../includes/header.php'  ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores ingresados en el formulario
    $horasTrabajadas = isset($_POST['trabajadas']) ? (int)$_POST['trabajadas'] : 0;
    $horasExtras = isset($_POST['extras']) ? (int)$_POST['extras'] : 0;

    // Cálculo del salario semanal (inciso a)
    $salarioBase = 16; 
    $salarioExtraNormal = 20; 

    if ($horasTrabajadas <= 40) {
        $salarioTotal = $horasTrabajadas * $salarioBase; 
    } else {
        $salarioTotal = (40 * $salarioBase) + (($horasTrabajadas - 40) * $salarioExtraNormal); 
    }

    $pagoHorasExtras = 0;
    if ($horasExtras > 0) {
        if ($horasExtras <= 8) {
            $pagoHorasExtras = $horasExtras * ($salarioBase * 2); 
        } else {
            $pagoHorasExtras = (8 * ($salarioBase * 2)) + (($horasExtras - 8) * ($salarioBase * 3)); 
        }
    }

    $salarioTotalConExtras = $salarioTotal + $pagoHorasExtras;

    // Mostrar los resultados
    echo "<div class='resultado-container'>
            <div class='resultado'>
                <h1>Resultados</h1>
                <p>Salario semanal (sin horas extras): $$salarioTotal</p>
                <p>Pago por horas extras: $$pagoHorasExtras</p>
                <p>Salario total con horas extras: $$salarioTotalConExtras</p>
            </div>    
        </div>";
} else {
    echo "<div class='resultado-container'>
            <div class='resultado'>
                Método no permitido
            </div>
        </div>";
}
?>