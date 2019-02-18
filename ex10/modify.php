
<!DOCTYPE html>
<html>
  <head>
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  </head>
  <body>

  <h2>Modify Books</h2>
  <?php

$book_id=$_REQUEST['book_id'];//Recibimos el id a modificar


include "../../conexion.php";
 $query="select * from books WHERE book_id='$book_id'"; //Selecciona el book_id que pasamos
 $resultado=$conexion->query($query);
$row=$resultado->fetch_assoc(); //Lo guarda en $row
//Colocamos php aqui, para que coja book_id antes del form
?>

<form action="modify_process.php?book_id=<?php echo $row['book_id'];?>" method="POST"><!--pasa el book_id a modify_process mediante post al pulsar enviar-->


<input type="text" name="book_name" size="30" placeholder="Title..." value="<?php echo $row['book_name'];//Asi escribe el titulo a modificar en el campo de texto
?>"/>

<input type="submit" name="submit" value="send"/>
</form>

  </body>
</html>

