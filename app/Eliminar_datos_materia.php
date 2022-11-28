<?php
include("../bd/conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM materias WHERE idMateria='$id'";
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
  echo "<script>alert('El materia ha sido eliminada correctamente');
  window.history.go(-1);</script>";
  header("Location: mostrar_datos_materias.php");
}else{
  echo"<script>
  alert('No se pudo eliminar la materia.');
  window.history.go(-1);
  </script>";
}
 ?>
