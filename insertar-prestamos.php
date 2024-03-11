<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Agregar Prestamo</h2>
  <form id="formuprestamo" name="formuprestamo" method="post">
    <div class="form-group">
      <label for="id_libro">id_libro:</label>
      <input type="text" name ="id_libro" class="form-control" id="id_libro">
    </div>
    <div class="form-group">
      <label for="id_usuario">id_usuario:</label>
      <input type="text" class="form-control" id="id_usuario" name="id_usuario">
    </div>
    <div class="form-group">
      <label for="fecha_prestamo">fecha_prestamo:</label>
      <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo">
    </div>
    <div class="form-group">
      <label for="fecha_devolucion">fecha_devolucion:</label>
      <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion">
    </div>

    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesaprestamo.php">Agregar prestamo</button>
  </form>
</div>

</body>
</html>