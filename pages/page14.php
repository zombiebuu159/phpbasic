<?php include '../includes/header.php'  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <table widt="200" border="1" align="center">
            <tr>
                <td><img src="../Static/img/exe1.jpg" alt="ejemplo1"></td>
                <td>
                    <?php
                        $nombre = "Daniel Tellez";
                        echo strlen($nombre);
                    ?>
                </td>
            </tr>
            <tr>
                <td><img src="../Static/img/exe2.jpg" alt="ejemplo1"></td>
                <td>
                    <?php
                        echo trim($nombre);
                    ?>
                </td>
            </tr>
            <tr>
                <td><img src="../Static/img/exe3.jpg" alt="ejemplo1"></td>
                <td>
                    <?php
                        echo strtoupper($nombre);
                    ?>
                </td>
            </tr>
            <tr>
                <td><img src="../Static/img/exe4.jpg" alt="ejemplo1"></td>
                <td>
                    <?php
                        echo strtolower($nombre);
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>