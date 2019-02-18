<?php


include "../../conexion.php";
$book_name= $_POST['book_name'];
$pages= $_POST['pages'];

//La conexion con la base de datos test se establece con conexion.php
//Aqui le indicamos a que tabla insertar los datos (books) y el campo.
$query="INSERT INTO books(book_name, pages) VALUES('$book_name','$pages')";//Esta es la instruccion sql que se ejecuta
$resultado=$conexion->query($query);
if($resultado){
    header("location:show_books.php");
}
else{
    echo "Error";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Saving books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  </head>
  <body>
<br>
<a href="Addbook.php">Add books </a> <br>
<a href="show_books.php">show books </a>

  </body>
</html>