<?php
session_start();
if ($_SESSION['rol']!=2){
  header('Location:../login.php');
}
  include ("../inc/menu_profesor.php");
  include('../bd/conexion.php');
  require_once ("../inc/session.php");
  $IDprof = $_SESSION['IDProfesor']  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../assets/icons/logo-prot.png">
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>

    <div class="linea">
    <img src="../assets/img/descarga.png" alt="Imagen de Profesor">
       <?php
        $sql = "SELECT * FROM profesor WHERE idProfesor ='$IDprof'";
          $resultado = mysqli_query($conexion, $sql);

          if ($mostrar = mysqli_fetch_assoc($resultado))
          {
            ?>
          <p>Mi Información</p>
          <p><?php echo $mostrar['nomProfesor'] ?> <?php echo $mostrar['apeMaestro'] ?></p>
          <p>Cedula: <?php echo $mostrar['cedula'] ?></p>
          <p>Correo: <?php echo $mostrar['correoProfesor'] ?></p>
          <p>Teléfono: <?php echo $mostrar['telProfesor'] ?></p>
          <p>Dirección: <?php echo $mostrar['direccion'] ?></p>
          <p>Estado: <?php echo $mostrar['estado'] ?></p>
           <?php 
        } 
        ?>
    </div>

  </body>
</html>
