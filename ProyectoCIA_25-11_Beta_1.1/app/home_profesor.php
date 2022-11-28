<?php
session_start();
if ($_SESSION['rol']!=2){
  header('Location:../login.php');
}
include ("../inc/menu_profesor.php");
require_once ("../inc/session.php");
require_once ('../bd/conexion.php');

$usuario = $_SESSION['user'];            
$clave = $_SESSION['pass'];

$consulta = "SELECT P.idProfesor , P.nomProfesor, P.apeProfesor, P.id_User, P.id_Curso, U.idUser, U.usuario, U.clave FROM profesor as P INNER JOIN usuario as U ON usuario='$usuario' and clave='$clave' AND P.id_User = U.idUser ";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
        
  $_SESSION['IDProfesor'] = $fila['idProfesor'];         
  $_SESSION['Nom_Profesor'] = $fila['nomProfesor'];
  $_SESSION['AP_Profesor'] = $fila['apeProfesor'];
  $_SESSION['IDcurso'] = $fila['id_Curso'];
  
// $ID_Estudiante = $_SESSION['IDProfesor'];
// $NOM_Estudiante = $_SESSION['Nom_Profesor'];
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
        echo "Bienvenido Profesor ".$_SESSION['Nom_Profesor']. " " .$_SESSION['AP_Profesor'];
        ?>
      </div>
    </div>

  </body>
</html>
