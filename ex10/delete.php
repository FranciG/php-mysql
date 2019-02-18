<?php


include "../../conexion.php";//La conexion con la base de datos test se establece con conexion.php

$book_id=$_REQUEST['book_id'];//Recibimos el id a modificar
//Aqui le indicamos a que tabla actualizar los datos (books) y el campo.
$query="Delete from books  WHERE book_id='$book_id'";
$resultado=$conexion->query($query);
if($resultado){
    header("location:show_books.php");//Si lo inserta, nos lleva a show_books
}
else{
    echo "Error";
}
?>