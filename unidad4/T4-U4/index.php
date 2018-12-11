<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica de base de datos con MySQL y PHP</title>
</head>
<body>
    <form action="comments.php" method="post" enctype="multipart/form-data">
        <label for="subject">Asunto:</label><br>
        <input id="subject" type="text" name="subject"><br>
        <label for="comments">Comentarios</label><br>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>