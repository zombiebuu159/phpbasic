<?php include 'includes/header.php'  ?>
<?php           
//Arreglos

//version anterior
$tecnologias = ['css','javascript','html','jquery','Ajax'];
echo $tecnologias[0];
echo "<hr>";
echo $tecnologias[2];
echo "<hr>";
echo $tecnologias[3];
echo "<hr>";
echo $tecnologias[4];

//o´tambien se puede
echo $tecnologias[4] . "<br>";

echo "<hr>";
//version actual
$lenguajes = array('SQL','PHP','ASP','JSP','PERL');
echo $lenguajes [3] . "<br>";



?>
<?php include 'includes/footer.php'  ?>