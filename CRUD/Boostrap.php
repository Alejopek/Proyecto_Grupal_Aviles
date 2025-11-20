<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <title>Lista de comidas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
crossorigin="anonymous">

</head>
<body>

<h1 class="m-3">Tabla de comidas </h1>

<table class="table table-striped m-3 p-2" style="width: 1000px;">

<thead>
<tr> 
    <th scope="col">ID</th>
    <th scope="col">Nombre</th>
    <th scope="col">Precio</th>
    <th scope="col">Categoría</th>
    <th scope="col">Descripción</th>
    <th scope="col">Acciones</th>
</tr>
</thead>

<tbody>
<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['precio'] ?></td>
    <td><?= $fila['categoria'] ?></td>
    <td><?= $fila['descripcion'] ?></td>

    <td>
        <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
        |
        <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Seguro que querés eliminar?')">Eliminar</a>
    </td>
</tr>
<?php } ?>
</tbody>

</table>

<a class="btn btn-outline-dark mx-3" href="agregar.php" role="button">Agregar comida</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>

</body>
</html>
