<?php
$conn = mysqli_connect("localhost", "root", "", "Comidas_db");
$id = $_GET['id'];
$resultado = mysqli_query($conn, "SELECT * FROM comidas WHERE id = $id");
$fila = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update form</title>
<link rel="stylesheet" href="estilos/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-4Q6GF2aSPe4DXB8Miphr37CMZZQ5oXLH2yaXWJ2w8e2zIHTl76ptT4jmndRuHDT" 
crossorigin="anonymous">
</head>
</html>
<body>
<h1 class="m-3">Editar Comida</h1>

<form action="actualizar.php" method="POST" class="mx-3 p-2" style="width: 1000px;">

    <input type="hidden" name="id" value="<?= $fila['id'] ?>">

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $fila['nombre'] ?>">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control" id="precio" value="<?= $fila['precio'] ?>">
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <input type="text" name="categoria" class="form-control" id="categoria" value="<?= $fila['categoria'] ?>">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?= $fila['descripcion'] ?>">
    </div>

    <button type="submit" class="btn btn-outline-dark mx-3">Actualizar</button>
    <a class="btn btn-outline-dark mx-3" href="index.php" role="button">Volver</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>

</body>
</html>
