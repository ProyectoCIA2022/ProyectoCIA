<?php
include("../bd/conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$actualizar = "UPDATE tutores SET nomTutor='$nombre', apeTutor='$apellido',cedula='$cedula',direccion='$direccion',telTutor='$telefono' WHERE idTutor='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado) {
  echo '<script>
        alert("Error al actualizar.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_tutores.php");
} else {
  echo '<script>
        alert("El Tutor ha sido modificado correctamente.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_tutores.php");
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
