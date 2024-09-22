<?php include '../includes/header.php'  ?>
<?php           

    //Estructuras ciclicas

    $i = 0;

    while($i < 10){
        echo $i . "<br>";
        $i++;
    }

    echo "<hr>";
    //do while
    $i = 0;
    do{
        echo $i . "<br>";
        $i++;        
    }while($i < 10);
    echo "<hr>";
    //for
    for($i=0; $i<10; $i++){
        echo $i . "<br>";
    }
    echo "<hr>";
    //foreach loop para recorrer arreglos
    $clientes = array('Hugo','Paco','Luis');
        foreach($clientes as $cliente){
            echo $cliente . "<br>";
        }
?>