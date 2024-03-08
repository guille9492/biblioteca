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

        //De libros
        $Titulo = $_POST["Titulo"];
        $Autor = $_POST["Autor"];
        $Genero = $_POST["Genero"];
        $Editorial = $_POST["Editorial"];
        $isbn = $_POST["isbn"];
        $Cantidad = $_POST["Cantidad"];

        //De usuarios
        $Nombre = $_POST["Nombre"];
        $Email = $_POST["Email"];
        $Telefono = $_POST["Telefono"];

        //conexión a la base de datos
        $servername = 'localhost';
        $username = 'usuario';
        $password = 'usuario';

        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         } else {
            echo "Conexión Exitosa" . "<br>";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "biblioteca");

         //creamos la sentencia SQL de inserción para libros, la ejecutamos y cerramos
        
        
        $insertarlibro = "INSERT libros (titulo,autor,genero,editorial,isbn,cantidad) 
                            VALUES ('$Titulo','$Autor','$Genero','$Editorial','$isbn','$Cantidad')";

        if ($Titulo) {
            if (mysqli_query($conn,$insertarlibro)) {
                echo "Insersión de datos exitosa" . "<br>";
            } else {
                echo "No se pudieron insertar los datos" . "<br>";
            }
        }
        
       // $insertarlibro->close();
        
       
        //Ejecutamos la sentencia SQL para usuarios, la ejecutamos y cerramos
       
        $insertarusuario = "INSERT usuarios (nombre,email,telefono)
                            VALUES ('$Nombre','$Email','$Telefono')";

        if ($Nombre) {
            if (mysqli_query($conn,$insertarusuario)) {
                echo "Insersión de datos exitosa". "<br>";
            } else {
                echo "No se pudieron insertar los datos";
            }
        }

       // $insertarusuario->close();
        
    //cerrar conexión
       $conn->close();

    ?>
</body>
</html>
