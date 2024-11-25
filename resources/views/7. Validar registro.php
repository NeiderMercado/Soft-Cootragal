<?php

//Recibe todo de 6. Registro.
include '2. Conexion BD.php';

$Nueva_contrasena=$_GET['txt_password'];
$user=$_GET['txt_user'];
$Nombre=$_GET['txt_nombre'];
$correo=$_GET['txt_correo'];


$Hash_new_password=md5($Nueva_contrasena);


$consulta1="insert into usuarios(Nombre, Correo, User, Password) values('".$Nombre."','".$correo."', '".$user."', '".$Hash_new_password."')";
mysqli_query($cadena, $consulta1);
 ?>
   <script type="text/javascript">
     alert('¡Bien hecho! El nuevo usuario fué agregado a la base de datos exitosamente.');
     location.href='1. Inicio de sesion.php'

   </script>
