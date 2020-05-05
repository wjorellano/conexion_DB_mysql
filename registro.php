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
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >=1 && strlen($_POST['correo']) >=1 && strlen($_POST['contraseña']) >=1 ){

       if (isset($_POST['sexo'])) {
         $sexo = $_POST['sexo'];
       }else{
         ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Sexo!</strong> no selectcionado.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <?php
       }
      $nombre = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $correo = trim($_POST['correo']);
      $contraseña = trim($_POST['contraseña']);
      $celular = trim($_POST['celular']);
      $fecha_naci = trim($_POST['fecha-naci']);
      $sexo =  trim($_POST['sexo']);
      $fechareg = date("d/m/y");
      $consulta = "INSERT INTO `user`(`Us_Nombre`, `Us_Apellido`, `Us_Correo`, `Us_Contraseña`, `Us_Celular`, `Us_Fecha_nacimiento`,`Us_Sexo`, `Us_Fecha_registro`)
      VALUES ('$nombre','$apellido','$correo','$contraseña','$celular','$fecha_naci','$sexo','$fechareg')";
      $resultado = mysqli_query($conexion,$consulta);
      if ($resultado) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
        </div>
        <?php
      }
    }else{
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>por favor complete los campos</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
    }
  }

    // if (isset($_POST['email']) && isset($_POST['password'])) {
    //   $email = mysqli_real_escape_string($conexion,$_POST['email']);
    //   $pass = mysqli_real_escape_string($conexion,$_POST['password']);
    //   $sql = "SELECT correo FROM user WHERE Correo = '$email' AND Contraseña = '$pass'";
    //   $result = mysqli_query($conexion,$sql);
    //   $num_row = mysqli_num_rows($result);
    //
    //   if ($num_row = "1") {
    //       $data = mysqli_fetch_array($result);
    //       $SESSION
    //     }else{
    //       ?>
    <!-- //         <div class="alert alert-danger" role="alert">
    //         <strong>No se ha encontrado ninguna cuenta!</strong>Favor registrarce.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>
    //       <?php
    //     } -->
    //
    // }

?>
