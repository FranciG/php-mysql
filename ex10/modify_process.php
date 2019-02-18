<?php


include "../../conexion.php";//La conexion con la base de datos test se establece con conexion.php

$book_id=$_REQUEST['book_id'];//Recibimos el id a modificar
$book_name= $_POST['book_name'];//El nuevo nombre lo recibe por post de modify.php
//Aqui le indicamos a que tabla actualizar los datos (books) y el campo.
$query="UPDATE books SET book_name='$book_name' WHERE book_id='$book_id'";
$resultado=$conexion->query($query);
if($resultado){
    header("location:show_books.php");//Si lo inserta, nos lleva a show_books
}
else{
    echo "Error";
}
?>

