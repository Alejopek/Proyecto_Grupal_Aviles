<?php
$conn = mysqli_connect("localhost","root","","Comidas_db");
$resultado = mysqli_query($conn, "SELECT * FROM comidas");
?>
