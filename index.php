<!DOCTYPE html>
<html lang="es">
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
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Conexion</a>
    <div class="custom-control custom-switch">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Sign up
      </button>
    </div>
  </nav>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <h3>log in</h3>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form class="login modal-body" method="post">
          <input type="email" name="correo" class="inputs" placeholder="Correo electronico">
          <input type="password" name="contraseña" class="inputs" placeholder="Contraseña">
          <input type="submit" class=" entrar btn btn-primary" value="Entrar" name="registrar">
        </form>
      </div>
    </div>
  </div>
</div>
  <form class="formulario "  method="POST">
    <h2>registro</h2>
    <input type="text" name="nombre" class="input"  placeholder="Nombre">
    <input type="text" name="apellido" class="input"  placeholder="Apellido">
    <input type="email" name="correo" class="inputs" placeholder="Correo electronico">
    <input type="password" name="contraseña" class="inputs" placeholder="Contraseña">
    <input type="submit" class=" entrar btn btn-primary" value="Entrar" name="registrar">
  </form>
  <?php

    include("registro.php");
   ?>
</body>
</html>
