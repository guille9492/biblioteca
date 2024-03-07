<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
