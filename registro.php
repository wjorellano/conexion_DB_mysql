<?php

  include("conexion.php");

  if ($conexion) {
    ?>
    <div class="alert alert-success" role="alert">
      <strong>Conexion exitosa.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
  }else{
    ?>
    <div class="alert alert-danger" role="alert">
      <strong>Error.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </div>
    <?php
  }
  if(isset($_POST['registrar'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1 && strlen($_POST['correo']) >=1 && strlen($_POST['contraseña']) >=1){

      $nombre = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $correo = trim($_POST['correo']);
      $contraseña = trim($_POST['contraseña']);
      $fechareg = date("d/m/y");
      $consulta = "INSERT INTO `user`(`Nombre`, `Apellido`, `Correo`, `Contraseña`, `Fecha`)
      VALUES ('$nombre','$apellido','$correo','$contraseña','$fechareg')";
      $resultado = mysqli_query($conexion,$consulta);
      if ($resultado) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Registro Exitoso!</strong> Felicidades por unirce a nosotros.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php
      }else{
        ?>
        <div class="alert alert-danger" role="alert">
          <strong>ha ocurrido un error!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <?php
      }
    }else{
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>por favor complete los campos</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <?php
    }
  }

?>
