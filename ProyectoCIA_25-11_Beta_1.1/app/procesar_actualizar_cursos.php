<?php
include("../bd/conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];

$actualizar = "UPDATE cursos SET nomCurso='$nombre' WHERE idCurso='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado) {
  echo '<script>
        alert("Error al actualizar.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_cursos.php");
} else {
  echo '<script>
        alert("El curso ha sido modificado correctamente.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_cursos.php");
}
// if(!$resultado){
//      echo '<script>
//      alert("Error al actualizar");
//      window.history.go(-1);
//      </script>';
// }else{
//      echo "El usuario ha sido modificado correctamente.";
//      header("Location: mostrar_datos_administrador.php");
// }
?>
