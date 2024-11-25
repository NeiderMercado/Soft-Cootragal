<?php
 // Conexión a la base de datos
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $dbname = "laravel";

 // Crear conexión
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Verificar conexión
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 // Recuperar datos del formulario
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $correo = $_POST['correo'];

 // Insertar datos en la base de datos
 $sql = "INSERT INTO myTable (nombre, apellido, correo)
 VALUES ('$nombre', '$apellido', '$correo')";

 if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

 // Cerrar conexión
 $conn->close();
?>