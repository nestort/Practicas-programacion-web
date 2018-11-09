<?php
$opcion=$_POST['vengador'];
switch($opcion){
    case 1:
    echo '<h1>Ant Man</h1> <br>';
    $imagen="ant.jpg";
    break;
    case 2:
    echo '<h1>Capitan america</h1> <br>';
    $imagen="cap.jpg";
    break;
    case 3:
    echo '<h1>Hulk</h1> <br>';
    $imagen="hulk.jpg";
    break;
    
    case 4:
    echo '<h1>Viuda negra</h1> <br>';
    $imagen="viuda.jpg";

    break;
    default:
    echo '<h1>No ha seleccionado una opción valida</h1> <br>';
    $imagen="404.png";
    break;
}
echo "<img src='img/$imagen' border='0' width='600' height='300'>";