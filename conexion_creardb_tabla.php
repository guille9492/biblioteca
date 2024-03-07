<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión y Creación de Base de datos y tablas</title>
</head>
<body>
        <?php
            //conexión a la base de datos
            $servername = 'localhost';
            $username = 'usuario';
            $password = 'usuario';

            $conn = new mysqli($servername, $username, $password);

            //Verificar conexión, crear Base de datos y tablas
            if (!$conn){
                echo "Conexión fallida";
             } else {
                 $basedatos = "CREATE DATABASE IF NOT EXISTS biblioteca";
                 if (mysqli_query($conn,$basedatos)) {
                     echo "Base de datos creada" . "<br>";
                 }
                 else {
                     echo "Error: " . mysqli_error ($conn);
                 }
     
                // Seleccionar base de datos
                 mysqli_select_db ($conn, "biblioteca");
     
                 //Creamos tablas
                 $libros = "CREATE TABLE libros(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    titulo VARCHAR(255) NOT NULL,
                    autor VARCHAR(100),
                    genero VARCHAR(50),
                    editorial VARCHAR(100),
                    isbn VARCHAR(20),
                    cantidad INT DEFAULT 0
                    )";
     
                $usuarios = "CREATE TABLE usuarios(
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(100) NOT NULL,
                    email VARCHAR(255),
                    telefono VARCHAR(20)
                   )";

                 if (mysqli_query($conn,$libros)) {
                 echo "La tabla libros ha sido creada" . "<br>"; 
                 }  
                 else {
                     "Tabla libro no creada" . "<br>";
                 }
                 echo "<br>";
                 if (mysqli_query($conn,$usuarios)) {
                    echo "La tabla usuarios ha sido creada" . "<br>";
                    }  
                    else {
                        "Tabla usuarios no creada" . "<br>";
                    }
             }
     
             //cerrar conexión
            $con->close();
        ?>
</body>
</html>
