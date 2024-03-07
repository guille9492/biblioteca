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
    <label for="Titulo">Titulo:</label>
    <input type="text" name="Titulo" id="Titulo">
    <label for="Autor">Autor:</label>
    <input type="text" name="Autor" id="Autor">
    <label for="Genero">Genero:</label>
    <input type="text" name="Genero" id="Genero">
    <label for="Editorial">Editorial:</label>
    <input type="text" name="Editorial" id="Editorial">
    <label for="isbn">isbn:</label>
    <input type="text" name="isbn" id="isbn">
    <label for="Cantidad">Cantidad:</label>
    <input type="text" name="Cantidad" id="Cantidad">
  </p>
  
  <p>
    <input name="Enviar" type="submit" id="Enviar" formaction="procesa.php" value="Enviar">
  </p>
</body>
</html>
