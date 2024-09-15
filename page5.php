<?php include 'includes/header.php'  ?>
<?php           
//variables y operaciones aritmeticas
$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numero4 = 40;

//suma
echo $numero1 + $numero2;
echo "<hr>";
//resta
echo $numero4 - $numero1;
echo "<hr>";
//multiplicacion
echo $numero1 * $numero2;
echo "<hr>";
//division
echo $numero4 / $numero1;
echo "<hr>";
//residuo
echo $numero4 % $numero1;
echo "<hr>";
echo 20 % 3;
echo "<hr>";


//Parentesis
echo ($numero1 + $numero2) * ($numero1 * 0.16);
echo "<hr>";

//incremento por 1
$numero1++;
echo $numero1;
echo "<hr>";

//decremento por 1
$numero1--;
echo $numero1;
echo "<hr>";

//incremento en la misma variable
$total = 0;
$total += 10;
$total += 20;
$total += 10;
echo $total;
echo "<hr>";

$total = 100;
$total -= 10;
$total -= 20;
$total -= 10;
echo $total;
echo "<hr>";
?>
<?php include 'includes/footer.php'  ?>