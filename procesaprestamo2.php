<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
        //Recogemos datos de los formularios

        $id_libro = $_POST["seleccionar2"];
        $id_usuario = $_POST["seleccionar"];
        $fecha_prestamo = $_POST["fecha_prestamo"];
        $fecha_devolucion = $_POST["fecha_devolucion"];

        //Variables para la conexión a la base de datos
        $servername = 'localhost';
        $username = 'usuario';
        $password = 'usuario';

        //Establecemos conexión
        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         } else {
            echo "Conexión Exitosa" . "<br>";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "biblioteca");
       
        //Ejecutamos la sentencia SQL para usuarios, la ejecutamos y cerramos
       
        $insertaprestamo = "INSERT prestamos (id_libro,id_usuario,fecha_prestamo,
                                             fecha_devolucion)
                            VALUES ('$id_libro','$id_usuario','$fecha_prestamo',
                                            '$fecha_devolucion')";

       // if ($id_libro) {
       //     if (mysqli_query($conn,$insertaprestamo)) {
          //      echo "Insersión de datos exitosa". "<br>";
          //  } else {
            //echo "No se pudieron insertar los datos";
        //    }
       // }

       mysqli_query($conn,$insertaprestamo);

       // $insertarusuario->close();
        
    //cerrar conexión
       $conn->close();

    ?>
</body>
</html>
