<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
crossorigin="anonymous">
</head>
<body>
    
<h1 class="m-3">Agregar comida </h1>

<form action="insertar.php" method="post" class="mx-3 p-2" style="width: 1000px;">

<div class="mb-3"> 
<label for="nombre" class="form-label">Nombre</label>
<input type="text" name="nombre" class="form-control" id="nombre" required>
</div>

<div class="mb-3">
<label for="precio" class="form-label">Precio</label>
<input type="number" step="0.01" name="precio" class="form-control" id="precio" required>
</div>

<div class="mb-3">
<label for="categoria" class="form-label">Categoría</label>
<input type="text" name="categoria" class="form-control" id="categoria" required>
</div>

<div class="mb-3">
<label for="descripcion" class="form-label">Descripción</label>
<input type="text" name="descripcion" class="form-control" id="descripcion" required>
</div>

<button type="submit" class="btn btn-outline-dark">Guardar</button>
<a class="btn btn outline-dark mx-3" href="index.php" role="button">Volver</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>

</body>
</html>
