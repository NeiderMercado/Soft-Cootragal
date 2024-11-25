<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>

    <link rel="stylesheet" type="text/css" href="css/estilo0.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div id="Registro">

      <form method="get" name="Form1" action="7. Validar registro.php" >

<h2 align="center" >Registro de usuario</h2>
<h6 align="center">*Todos los campos son obligatorios*</h6>
<br>


        <div class="form-group">
          <label>NOMBRE:</label>
          <input type="text" class="form-control" name="txt_nombre" placeholder="Ingrese Usuario" required>
        </div>

        <div class="form-group">
          <label>CORREO:</label>
          <input type="text" class="form-control" name="txt_correo" placeholder="Ingrese Contraseña" required>
        </div>

        <div class="form-group">
          <label>USER:</label>
          <input type="text" class="form-control" name="txt_user" placeholder="Ingrese Contraseña" required>
        </div>

        <div class="form-group">
          <label>CONTRASEÑA:</label>
          <input type="password" class="form-control" name="txt_password" placeholder="Ingrese Contraseña" required>
        </div>

    <div class="checkbox">
      
      <br>


    </div>
<br>

    <button style="margin-left:43%;" type="submit"  class="btn btn-primary">Registrar</button>

      </form>

    </div>

  </body>
</html>

<?php


 ?>
