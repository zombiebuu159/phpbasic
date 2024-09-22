<?php include 'includes/header.php'  ?>

<?php

$pesosuper = 112;
$pesobatman = 125;

$cantsuper = $_REQUEST["superman"];
$cantbatman = $_REQUEST["batman"];

$paquetesuper = $cantsuper * $pesosuper;
$paquetebatman = $cantbatman * $pesobatman;
$pesototal = $paquetebatman + $paquetesuper;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Static/css/estilos.css">
</head>
<body>
    <div class="form-container">
        <h2>Paquete de Jugueteria</h2>
        <form action="operacionesJugeteria.php" method="post">
            <table align="center">
                <tr>
                    <td>Ingrese la cantidad de venta del Superman</td>
                    <td><input name="superman" type="number" /></td>
                </tr>
                <tr>
                    <td>Ingrese la cantidad de venta del Batman</td>
                    <td><input name="batman" type="number" /></td>
                </tr>            
                <tr>
                    <td><input class="Formulario_btn" name="input" type="submit" value="enviar"></td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>
    <div class="resultado-container">
        <div class="resultado">
            <p>El peso del paquete superman es: <strong><?php echo $paquetesuper; ?></strong></p>
            <p>El peso del paquete batman es: <strong><?php echo $paquetebatman; ?></strong></p>
            <p>El peso total del paquete es: <strong><?php echo $pesototal; ?></strong></p>
        </div>
    </div>
</body>
</html>