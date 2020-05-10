<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
   integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="estilos.css">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/24a7cebcbe.js" crossorigin="anonymous"></script>
  <title>Conexion</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Conexion</a>
    <div class="custom-control custom-switch">
      <a href="index.php" class="btn btn-primary">Iniciar sesion</a>
    </div>
  </nav>
  <form class="formulario " id="formulario" method="POST">
    <h2>registro</h2>
    <input type="text" name="nombre" class="input"  placeholder="Nombre" required="" pattern="[a-zA-Z]+">
    <input type="text" name="apellido" class="input"  placeholder="Apellido" required="" pattern="[a-zA-Z]+">
    <input type="email" name="correo" class="inputs" placeholder="Correo electronico">
    <input type="password" name="contraseña" class="inputs" placeholder="Contraseña" required="" minlength="8">
    <input type="text" name="celular" class="inputs" placeholder="Celular" required="" pattern="[0-9]+" maxlength="10" minlength="10">
    <input type="text" name="fecha-naci" class="inputs" placeholder="Fecha de Nacimiento aaaa/mm/dd" maxlength="10" required="" pattern="[0-9-/]+">
    <div class="city">
      <select class="custom-select input mr-sm-2 " id="inlineFormCustomSelect" name="ciudad" required="">
          <option selected>Ciudad</option>
          <option value="Baranoa">Baranoa</option>
          <option value="Barranquilla">Barranquilla</option>
          <option value="Santo tomas">Santo tomas</option>
        </select>
    </div>
    <div class="radios">
      <input class="btn-radio " type="radio" name="sexo" id="defaultCheck1" value="masculino" checked>
      <label class="label-radio" for="defaultCheck1">Masculino</label>
      <input class="btn-radio" type="radio" name="sexo" id="defaultCheck2" value="femenino">
      <label class="label-radio" for="defaultCheck2">Femenino</label>
    </div>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1" name="tyc" value="true" checked>
      <label href="#" class="custom-control-label" for="customCheck1" >Terminos y condiciones.</label>
    </div>
    <input type="submit" class=" entrar btn btn-primary" value="Entrar" name="registrar" id="registrar">
  </form>
  <?php

    include("registro.php");
   ?>
</body>
</html>
