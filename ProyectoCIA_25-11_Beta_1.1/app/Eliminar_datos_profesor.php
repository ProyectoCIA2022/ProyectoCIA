<?php
include("../bd/conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM profesor WHERE idProfesor='$id'";
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
  echo "<script>alert('El Profesor ha sido eliminado correctamente');
  window.history.go(-1);</script>";
  header("Location: mostrar_datos_profesor.php");
}else{
  echo"<script>
  alert('No se pudo eliminar el Profesor.');
  window.history.go(-1);
  </script>";
}
 ?>
