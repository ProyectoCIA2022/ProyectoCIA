<?php
include("../bd/conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM administrador WHERE idAdministrador='$id'";
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
  echo "<script>alert('El admin ha sido eliminado correctamente');
  window.history.go(-1);</script>";
  header("Location: mostrar_datos_administrador.php");
}else{
  echo"<script>
  alert('No se pudo eliminar el admin.');
  window.history.go(-1);
  </script>";
}
 ?>
