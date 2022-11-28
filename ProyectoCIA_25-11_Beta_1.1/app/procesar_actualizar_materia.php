<?php
include("../bd/conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$profesor = $_POST["profesor"];

$actualizar = "UPDATE materias SET nomMateria='$nombre',idProfesor='$profesor' WHERE idMateria='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado) {
  echo '<script>
        alert("Error al actualizar.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_materias.php");
} else {
  echo '<script>
        alert("El materia ha sido modificado correctamente.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_materias.php");
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
