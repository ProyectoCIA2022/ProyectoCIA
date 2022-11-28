<?php
include("../bd/conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM cursos WHERE idCurso='$id'";
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
  echo "<script>alert('El aula ha sido eliminado correctamente');
  window.history.go(-1);</script>";
  header("Location: mostrar_datos_cursos.php");
}else{
  echo"<script>
  alert('No se pudo eliminar el aula.');
  window.history.go(-1);
  </script>";
}
 ?>
