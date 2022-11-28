<?php
session_start();
if ($_SESSION['rol']!=1){
  header('Location:../login.php');
}
include ("../inc/menu_administrador.php");
require_once ("../inc/session.php");
require_once ('../bd/conexion.php');

$usuario = $_SESSION['user'];            
$clave = $_SESSION['pass'];

$consulta = "SELECT D.idAdministrador, D.nomAdmin, D.apeAdmin, D.id_User, U.idUser, U.usuario, U.clave FROM administrador as D INNER JOIN usuario as U ON usuario='$usuario' and clave='$clave' AND D.id_User = U.idUser ";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
        
  $_SESSION['IDAdmin'] = $fila['idAdministrador'];         
  $_SESSION['Nom_Admin'] = $fila['nomAdmin'];
  $_SESSION['AP_Admin'] = $fila['apeAdmin'];

// $ID_Estudiante = $_SESSION['IDAdmin'];
// $NOM_Estudiante = $_SESSION['Nom_Admin'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SISTEMA ESCOLAR</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>

  <div class="content_sistema">
    <div>
    <?php
      echo "Bienvenido Admnistrador ".$_SESSION['Nom_Admin']. " " .$_SESSION['AP_Admin'];
    ?>
    </div>
  </div>
  
  </body>
</html>
