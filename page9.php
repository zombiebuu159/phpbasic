<?php include 'includes/header.php'  ?>
<?php           

    $tecnologias = ['CSS','HTML','JavaScript','Jquery','Ajax'];
    echo $tecnologias[0] . "<br>";
    echo $tecnologias[1] . "<br>";
    echo $tecnologias[2] . "<br>";
    echo $tecnologias[3] . "<br>";
    echo $tecnologias[4] . "<br>";
?>
    <pre>
        <?php print_r($tecnologias) ?>
    </pre>
<hr>
<?php
    $lenguajes = array('SQL','PHP','JSP','ASP');
    echo $lenguajes[3];
?>
<hr>
<pre>
<?php
    var_dump($lenguajes);
?>
</pre>

