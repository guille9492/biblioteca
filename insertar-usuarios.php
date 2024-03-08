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
  <h2 class="mb-4">Agregar Usuario</h2>
  <form id="formuusuario" name="formuusuario" method="post">
    <div class="form-group">
      <label for="Nombre">Nombre:</label>
      <input type="text" name ="Nombre" class="form-control" id="Nombre">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="text" class="form-control" id="Email" name="Email">
    </div>
    <div class="form-group">
      <label for="Telefono">Telefono:</label>
      <input type="text" class="form-control" id="Telefono" name="Telefono">
    </div>
    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesa.php">Agregar Usuario</button>
  </form>
</div>




 <!-- 
<form id="formulibro" name="formulibro" method="post">
  <p>
    <label for="Nombre">Nombre:</label>
    <input type="text" name="Nombre" id="Nombre" required>
    <label for="Email">Email:</label>
    <input type="text" name="Email" id="Email" required>
    <label for="Telefono">Telefono:</label>
    <input type="text" name="Telefono" id="Telefono" required>
  </p>
  
  <p>
    <input name="Enviar" type="submit" id="Enviar" formaction="procesa.php" value="Enviar">
  </p>
-->
</body>
</html>
