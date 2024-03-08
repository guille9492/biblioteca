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
  <h2 class="mb-4">Agregar Libro</h2>
  <form id="formulibro" name="formulibro" method="post">
    <div class="form-group">
      <label for="Titulo">Título:</label>
      <input type="text" name ="Titulo" class="form-control" id="Titulo">
    </div>
    <div class="form-group">
      <label for="Autor">Autor:</label>
      <input type="text" class="form-control" id="Autor" name="Autor">
    </div>
    <div class="form-group">
      <label for="Genero">Género:</label>
      <select class="form-control" id="Genero" name="Genero">
        <option>Ficción</option>
        <option>No ficción</option>
        <option>Poesía</option>
        <option>Historia</option>
        <option>Ciencia ficción</option>
        <!-- Agrega más opciones según sea necesario -->
      </select>
    </div>
    <div class="form-group">
      <label for="isbn">ISBN:</label>
      <input type="text" class="form-control" id="isbn" name="isbn">
    </div>
    <div class="form-group">
      <label for="Editorial">Editorial:</label>
      <input type="text" class="form-control" id="Editorial" name="Editorial">
    </div>
    <div class="form-group">
      <label for="Cantidad">Cantidad:</label>
      <input type="text" class="form-control" id="Cantidad" name="Cantidad">
    </div>
    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesa.php">Agregar Libro</button>
  </form>
</div>


<!--<form id="formulibro" name="formulibro" method="post">
  <p>
    <label for="Titulo">Titulo:</label>
    <input type="text" name="Titulo" id="Titulo" required>
    <label for="Autor">Autor:</label>
    <input type="text" name="Autor" id="Autor" required>
    <label for="Genero">Genero:</label>
    <input type="text" name="Genero" id="Genero" required>
    <label for="Editorial">Editorial:</label>
    <input type="text" name="Editorial" id="Editorial" required>
    <label for="isbn">isbn:</label>
    <input type="text" name="isbn" id="isbn" required> 
    <label for="Cantidad">Cantidad:</label>
    <input type="text" name="Cantidad" id="Cantidad" required>
  </p>

  <p>
    <input name="Enviar" type="submit" id="Enviar" formaction="procesa.php" value="Enviar">
  </p>
  -->
</body>
</html>
