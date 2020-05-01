<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/24a7cebcbe.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Conexion</title>
</head>
<body>
  <form class="formulario"  method="POST">
    <h2>registro</h2>
    <input type="text" name="nombre" class="input"  placeholder="Nombre">
    <input type="text" name="apellido" class="input"  placeholder="Apellido">
    <input type="email" name="correo" class="inputs" placeholder="Correo electronico">
    <input type="password" name="contraseña" class="inputs" placeholder="Contraseña">
    <input type="submit" class="btn btn-dark" value="Entrar" name="registrar">
  </form>
  <?php

    include("registro.php");
   ?>
</body>
</html>
