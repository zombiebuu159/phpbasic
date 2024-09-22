<?php include '../includes/header.php'  ?>
<?php           
//Estructuras de control selectivo switch
$lenguaje = "SQL";

switch($lenguaje){
    case 'php':
        echo "back-end";
        break;
    case 'html':
        echo "front-edn";
        break;
        case 'css':
            echo "front-edn";
            break;

            case 'javascript':
                echo "front-edn";
                break;

                case 'SQL':
                    echo "Back-end";
                    break;
                default:
                echo "Opcion no encontrada";
                break;
}


?>
<?php include '../includes/footer.php'  ?>