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
$correo = $_POST["correo"];
$estado = $_POST["estado"];
$curso = $_POST["curso"];

$actualizar = "UPDATE profesor SET nomProfesor='$nombre', apeProfesor='$apellido',cedula='$cedula',direccion='$direccion',usuario='$usuario',clave='$clave',telProfesor='$telefono',correoProfesor='$correo',estado='$estado',idCurso='$curso' WHERE idProfesor='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado){
  echo '<script>
     alert("Error al actualizar.");
     window.history.go(-1);
     </script>';
}else{
 echo '<script>
       alert("El profesor ha sido modificado correctamente.");
       window.history.go(-1);
       </script>';
       header("Location: mostrar_datos_profesor.php");
}
?>
