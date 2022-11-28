<?php
session_start();
if ($_SESSION['rol']!=3){
  header('Location:../login.php');
}
    include('../bd/conexion.php');
    include ("../inc/menu_estudiante.php");
    require_once ("../inc/session.php");
    $IDEstudiante = $_SESSION['IDAlumno'];
    $tutor = $_SESSION['ID_Tutor'];            
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
    <img src="../assets/img/estudian.png" alt="Imagen de Estudiante">
       <?php
        $sql = "SELECT * FROM alumnos WHERE idAlumno = '$IDEstudiante' ";
          $resultado = mysqli_query($conexion, $sql);

          if ($mostrar = mysqli_fetch_assoc($resultado))
          {
            ?>
          <p>Mi Información</p>
          <p><?php echo $mostrar['nomAlumno'] ?> <?php echo $mostrar['apeAlumno'] ?></p>
          <p>Fecha de Nacimiento: <?php echo $mostrar['nacFecha'] ?></p>
          <p>Correo: <?php echo $mostrar['correoAlumno'] ?></p>
          <?php 
        } 
        ?>
    </div>

    <div class="contactos">
     <?php
        $sql = "SELECT * FROM tutores WHERE idTutor  = '$tutor'";
          $resultado = mysqli_query($conexion, $sql);

          if ($mostrar = mysqli_fetch_assoc($resultado))
          {
            ?>
            <p>En caso de que el estudiante tenga una Emergencia contactarse con:</p>
            <p>Nombre: <?php echo $mostrar['nomTutor'] ?> <?php echo $mostrar['apeTutor'] ?></p>
            <p>Telefono: <?php echo $mostrar['telTutor'] ?></p>
           <?php 
        } 
        ?>
      </div>

  </body>
</html>
