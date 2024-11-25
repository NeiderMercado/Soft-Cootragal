<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
session_start();
include '2. Conexion BD.php';
$usuario=$_POST['txt_usuario'];
$password=$_POST['txt_password1'];
$hash2=md5($password);

$consulta1="select * from usuarios where User='{$usuario}' and Password= '{$hash2}'";
$resultado=mysqli_query($cadena, $consulta1);

$numero_registros=mysqli_num_rows($resultado);


if ($numero_registros>0)

{
  $_SESSION['AUTENTICADO']="si";
  $_SESSION['NAME']="$usuario";
?>

<script type="text/javascript">

   location.href='4. Home.php';

</script>

<?php
}

else
{

?>
<script type="text/javascript">
 alert('¡Ups!, Que pena pero alguno de los campos ingresados son erroneos, berificalos e intentalo de nuevo.');
  location.href='1. Inicio de sesion.php'
</script>

<?php

}

?>
*/
