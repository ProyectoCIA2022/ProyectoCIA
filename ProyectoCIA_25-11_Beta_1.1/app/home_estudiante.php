<?php
session_start();
if ($_SESSION['rol']!=3){
  header('Location:../login.php');
}

      require_once ('../bd/conexion.php');
      require_once ("../inc/menu_estudiante.php");
      require_once ("../inc/session.php");
      

      $usuario = $_SESSION['user'];            
      $clave = $_SESSION['pass'];

$consulta = "SELECT A.idAlumno, A.nomAlumno, A.apeAlumno, A.id_User, A.id_Curso, A.id_Tutores, U.idUser, U.usuario, U.clave FROM alumnos as A INNER JOIN usuario as U ON usuario='$usuario' and clave='$clave' AND A.id_User = U.idUser ";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
              

                
        $_SESSION['IDAlumno'] = $fila['idAlumno'];         
        $_SESSION['Nom_Alumno'] = $fila['nomAlumno'];
        $_SESSION['AP_alumno'] = $fila['apeAlumno'];
        $_SESSION['IDcurso'] = $fila['id_Curso'];
        $_SESSION['ID_Tutor'] = $fila['id_Tutores'];
        
      $ID_Estudiante = $_SESSION['IDAlumno'];
      $NOM_Estudiante = $_SESSION['Nom_Alumno'];
    ?>
<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../assets/icons/logo-prot.png">
     <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>
    
    <div class="content_sistema">
      <div>
        <?php

        echo "Bienvenido Estudiante ".$NOM_Estudiante. " " .$_SESSION['AP_alumno'];
        ?>
      </div>
    </div>

  </body>
</html>
