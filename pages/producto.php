<?php include '../includes/header.php' ?>
<link href="..Static/css/estilos.css" rel="stylesheet" type="text/css">
<h2>hola</h2>
<?php
    $art = $_POST['txtarticulo'];
    $precio = $_REQUEST['txtprecio'];

    if(isset($_POST['codigo'])){
        $cod = $_REQUEST['codigo'];
        switch($cod){
            case '1':
                $desc = $precio * .15;
                $desc1 = $precio - $desc;
                echo "El articulo es: $art <br>";
                echo "El codigo es: $cod <br>";
                echo "El precio con descuento es: $desc1 <br>";
                echo "El precio original es: $precio";
            break;
            case '2':
                $desc = $precio * .30;
                $desc1 = $precio - $desc;
                echo "El articulo es: $art <br>";
                echo "El codigo es: $cod <br>";
                echo "El precio con descuento es: $desc1 <br>";
                echo "El precio original es: $precio";
            break;
            default:    
                echo "No hay opcion";
            break; 

        }

    }
?>

<?php include '../includes/footer.php'; ?>