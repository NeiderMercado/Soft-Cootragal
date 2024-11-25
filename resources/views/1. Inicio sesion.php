<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" type="text/css" href="css/estilo0.css">
    <link rel="stylesheet" href="css/estilo0.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div id="Inicio_sesion">

      <form method="post" name="Form1" action="3. Validar inicio de sesion.php" >

<h2 align="center" >Inicio de Sesión</h2>
<h6 align="center">*Para continuar usted debe de ingrsar sus credenciales*</h6>
<br>


        <div class="form-group">
          <label>USUARIO:</label>
          <input type="text" class="form-control" required name="txt_usuario" placeholder="Ingrese Usuario">
        </div>

        <div class="form-group">
          <label>CONTRASEÑA:</label>
          <input type="password" class="form-control" required name="txt_password1" placeholder="Ingrese Contraseña">
        </div>

    <div class="checkbox">
      <label><input type="checkbox">Recuerdame</label>
      <br>
      <br>
      <center><a href="6. Registro.php">Quiero registrarme</a></center>
    </div>
<br>
    <button style="margin-left:35%;" type="submit"  class="btn btn-primary">Ingresar</button>

      </form>

    </div>

  </body>
</html>

<?php


 ?>
