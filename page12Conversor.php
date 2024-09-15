<?php include 'includes/header.php'  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio conversor</title>
</head>

<body>
    <form action="operaciones.php" method="post">
        <table align="center">
            <tr>
                <td>Ingrese los centimentros:</td>
                <td><input name="cm" type="number" /></td>
            </tr>            
            <tr>
                <td><input name="input" type="submit" value="enviar"></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>

</html>
