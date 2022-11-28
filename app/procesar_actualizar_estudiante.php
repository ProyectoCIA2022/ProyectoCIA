<?php
include("../bd/conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$fecha = $_POST["fecha"];
$tutor = $_POST["tutor"];
$curso = $_POST['curso'];

$actualizar = "UPDATE alumnos SET nomAlumno='$nombre', apeAlumno='$apellido',edad='$edad',direccion='$direccion',usuario='$usuario',clave='$clave',telAlumno='$telefono',correoAlumno='$correo',nacFecha='$fecha',idTutores='$tutor',idCurso='$curso' WHERE idAlumno='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado) {
  echo '<script>
        alert("Error al actualizar.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_estudiante.php");
} else {
  echo '<script>
        alert("El Estudiante ha sido modificado correctamente.");
        window.history.go(-1);
        </script>';
        header("Location: mostrar_datos_estudiante.php");
}
// if(!$resultado){
//      echo '<script>
//      alert("Error al actualizar");
//      window.history.go(-1);
//      </script>';
// }else{
//      echo "El usuario ha sido modificado correctamente.";
//      header("Location: mostrar_datos_estudiante.php");
// }
?>
