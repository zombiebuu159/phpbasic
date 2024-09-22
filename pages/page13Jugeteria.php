<?php include '../includes/header.php'  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugeteria</title>
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
    
    
</body>
</html>