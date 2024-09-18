<?php include 'includes/header.php'  ?>
<!--Genrar un aplicativo que permita grabar productos en una tienda departamental los datos a almacenar son el nombre  del articulo, precio del articulo: si el codigo es 1 se realizara un descuento del 15% y si el codigo es 2 el descuento sera del 30%-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Static/css/estilos.css">
</head>
<body>
    <div class="form-container widt">
        <h1>Registro de articulos</h1>
        <form name="frm" method="POST" action="producto.php">
            <label> 
                Ingresa el nombre del articulo
                <input type="text" name="txtarticulo">
            </label>
            <br>
            <label > 
                Ingresa el precio del articulo
                <input type="text" name="txtprecio">
            </label>
            <br>
            <label> 
                Selecciona el codigo del articulo
                <select name="codigo">
                    <option value="1">Codigo 1</option>
                    <option value="1">Codigo 2</option>
                </select>
            </label>
            <hr>
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>

<?php include 'includes/footer.php'  ?>