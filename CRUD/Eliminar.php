<?php
$conn = mysqli_connect("localhost", "root", "", "Comidas_db");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM comidas WHERE id=$id");

header("Location: index.php");
?>
