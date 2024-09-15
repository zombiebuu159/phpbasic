<?php include 'includes/header.php'  ?>

<?php

$cem = $_REQUEST['cm'];
$pulga = $cem / 2.54;
$metro = $cem / 100;

echo "Los centimetros a pulgadas son: $pulga" . "<br>";

echo "Los centimetros a metros son: $metro" . "<br>";


