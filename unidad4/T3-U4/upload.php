<?php 
$folder="Images/";
opendir($folder);
$destination=$folder.$_FILES['photo']['name'];
copy($_FILES['photo']['tmp_name'],$destination);
$nameFile=$_FILES['photo']['name'];
$sizeFile=$_FILES['photo']['size'];
echo("
    <h1>¡Archivo subido con &eacute;xito!</h1>
    <img src=\"Images/$nameFile\">
    <p>Se ha subido con &eacute;xito el archivo: ".$nameFile." <br>
    que tiene un tama&ntilde;o de :".$sizeFile." Bytes</p>
");


?>