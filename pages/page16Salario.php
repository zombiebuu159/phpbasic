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
    <div class="form-container">
        <form action="salario.php" method="post">
            <table align="center">
                <tr>
                    <td>Ingrese las Horas trabajadas</td>
                    <td><input name="trabajadas" type="number" /></td>
                </tr>
                <tr>
                    <td>Ingrese las horas extras trabajadas</td>
                    <td><input name="extras" type="number" /></td>
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