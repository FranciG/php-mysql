<?php

$conexion=new mysqli("localhost", "book_manager","manager","test"); //Tambien se puede usar PDO

if($conexion){
    echo "conexion ok";
}
else {
    echo "sin conexion";
}