<?php
$subject=$_POST['subject'];
$comments=$_POST['comments'];
$query="INSERT INTO `mensajes` (`id`, `subject`, `content`) VALUES (NULL, '".$subject."', '".$comments."');";
$mysqli=new mysqli("127.0.0.1","root","","invitaciones");
$result=$mysqli->query($query);
echo ($result."");
?>