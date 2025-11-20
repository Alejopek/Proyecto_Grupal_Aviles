<?php
$conn = mysqli_connect("localhost" , "root" , "" , "Comidas_db");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

mysqli_query($conn , "INSERT INTO comidas (nombre, precio, categoria, descripcion) 
                      VALUES ('$nombre', '$precio', '$categoria', '$descripcion')");

header("Location: index.php");
?>
