

 
<!DOCTYPE html>
<html>
  <head>
    <title>Showing books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  </head>
  <body>
<table>
  <h2>Showing books</h2>
<a href="Addbook.php">Add books </a><!--Un link, porsi queremos añadir libros-->
<tbody>
<tr>

<td>Id</td>
<td>Book name</td>
</tr>

<?php
include "../../conexion.php";
 $query="select * from books"; //Muestra todo el contenido de la tabla
 $resultado=$conexion->query($query);
 while($row=$resultado->fetch_assoc()){ //Con el bucle muestra todo lo que le pedimos y lo escribe
?>
<tr>
<td><?php echo $row['book_id']; ?></td>
<td><?php echo $row['book_name'];?></td>
<td> paginas <?php echo $row['pages'];?></td>

<td><a href="modify.php?book_id=<?php echo $row['book_id'];?>">Modify book </a></td><!--Asi pasamos el book id de esa fila al hacer clic a modify.php, y vamos a modify.php-->
<td><a href="delete.php?book_id=<?php echo $row['book_id'];?>">Delete book </a></td>
</tr>
<?php
 }
?>

</tbody>
</table>
  </body>
</html>