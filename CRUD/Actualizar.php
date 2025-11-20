<?php
$conn = mysqli_connect("localhost", "root", "", "Comidas_db");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

mysqli_query($conn, "UPDATE comidas 
                     SET nombre='$nombre', precio=$precio, categoria='$categoria', descripcion='$descripcion' 
                     WHERE id=$id");

header("Location: index.php");
?>
