# Programacion web  :school:
Practica: Ejemplo que consiste en construir un sitio web que funciona con una base de datos. Diseño de un libro de invitados en el que los visitantes del sitio pueden añadir comentarios, visibles por los demás usuarios.
Crearemos un formulario Web que servirá para recoger los datos del usuario, insertaremos esa información en la base de datos y crearemos otra página que mostrará en pantalla los datos de la base de datos.
1. Diseñar la base de datos.
1.1 crear la base de datos INVITACIONES.
1.2 Crear la tabla MENSAJES.
create table mensajes( id INT NOT NULL AUTO_INCREMENT,
asunto VARCHAR(150)
contenido TEXT, PRIMARY KEY(id))
2. Enviar un mensaje a través del formulario Web.
3. Listar todos los mensajes.
Después de enviar los datos a la base de datos se crea una página que
muestra dos los mensajes del libro de invitados.
