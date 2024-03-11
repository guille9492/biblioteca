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
     <!-- <label for="id_libro">id_libro:</label>
    -->
      <input type="text" name ="id_libro" class="form-control" id="id_libro">

      <?php
          //Variables para la conexión a la base de datos
          $servername = 'localhost';
          $username = 'usuario';
          $password = 'usuario';

          //Establecemos conexión
        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "biblioteca");

         //Creamos la consulta SQL

         $consultar2 = "SELECT titulo FROM prestamos, libros WHERE prestamos.id_libro 
         = libros.id";

         //Ejecutamos la sentencia

         $registros2=mysqli_query($conn,$consultar2);
	
        echo "<label for='seleccionar2'>Elige el nombre del libro:</label>";
        echo "<select name='seleccionar2' id='seleccionar2'>";
        while($registro2=mysqli_fetch_row($registros2)){
            
        echo "<option value='$registro2[0]'>".$registro2[0] ."</option>";
            
        }
        echo "</select>";

      ?>
    </div>

    <div class="form-group">
      <!--<label for="id_usuario">id_usuario:</label>
    -->
      <input type="text" class="form-control" id="id_usuario" name="id_usuario">

      <?php
          //Variables para la conexión a la base de datos
          $servername = 'localhost';
          $username = 'usuario';
          $password = 'usuario';

          //Establecemos conexión
        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "biblioteca");

         //Creamos la consulta SQL

         $consultar = "SELECT nombre FROM prestamos, usuarios WHERE prestamos.id_usuario 
         = usuarios.id";

         //Ejecutamos la sentencia

         $registros=mysqli_query($conn,$consultar);
	
        echo "<label for='seleccionar'>Elige el nombre del usuario:</label>";
        echo "<select name='seleccionar' id='seleccionar'>";
        while($registro=mysqli_fetch_row($registros)){
            
            echo "<option value='$registro[0]'>".$registro[0] ."</option>";
            
        }
        echo "</select>";
      ?>
    </div>

    <div class="form-group">
      <label for="fecha_prestamo">fecha_prestamo:</label>
      <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo">
    </div>
    <div class="form-group">
      <label for="fecha_devolucion">fecha_devolucion:</label>
      <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion">
    </div>

    <button type="submit" class="btn btn-primary" name="Enviar" id="Enviar" formaction="procesaprestamo2.php">Agregar prestamo</button>
  </form>
</div>

</body>
</html>