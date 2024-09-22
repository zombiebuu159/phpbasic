<?php include '../includes/header.php'; ?>

<?php
$cem = $_REQUEST['cm'];
$pulga = $cem / 2.54;
$metro = $cem / 100;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Conversión</title>
    <link rel="stylesheet" href="Static/css/estilos.css">
</head>
<body>
    <div class="form-container">
        <form action="operaciones.php" method="post">
            <table align="center">
                <tr>
                    <td>Ingrese los centímetros:</td>
                    <td><input name="cm" type="number" required /></td>
                </tr>
                <tr>
                    <td><input name="input" type="submit" value="Enviar"></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>

    <div class="resultado-container">
        <div class="resultado">
            <p>Los centímetros a pulgadas son: <strong><?php echo $pulga; ?></strong></p>
            <p>Los centímetros a metros son: <strong><?php echo $metro; ?></strong></p>
        </div>
    </div>

</body>
</html>

