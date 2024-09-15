<?php include 'includes/header.php'  ?>
<?php           
//Estructuras de control selectivo

if(0<1){
    echo "verdadero el 1 es menor que el1";
}else{
    echo "Falso el 1 es mayor que el 0";
}
echo "<hr>";

$edad1 = 12;
$edad2 = 13;
if($edad1 < $edad2){
    echo "verdadero";
}else{
    echo "falso";
}

echo "<hr>";

$numero = 10;
if($numero%2==1){
    echo "es par";
}else{
    echo "es Impar";
}

?>
<?php include 'includes/footer.php'  ?>