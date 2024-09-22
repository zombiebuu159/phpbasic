<?php include '../includes/header.php'  ?>

<?php

$aactual = 2024;
$fnan = $_REQUEST['fechan'];
//$fnan = $_POST['fechan'];
$edad = $aactual - $fnan; //Modelo de negocio
echo "Tu edad es: $edad";