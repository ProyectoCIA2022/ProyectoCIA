<?php
include("../bd/conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$estado = $_POST["estado"];

$insertar = "INSERT INTO profesor
(nomProfesor,apeMaestro,cedula,direccion,usuario,clave,telProfesor,correoProfesor,estado)VALUES('$nombre','$apellido','$cedula','$direccion','$usuario','$clave','$telefono','$correo','$estado')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM profesor WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0) {
  echo '<script>
        alert("El Profesor ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM profesor WHERE correoProfesor='$correo'");

if(mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
    alert("El correo ya esta registrado.");
    window.history.back();
    <script>';

    exit;
}


$resultado = mysqli_query($conexion, $insertar);

if(!$resultado) {
    echo '<script>
    alert("error al registrarse .");
    window.history.back();
    <script>';
} else {
    echo '<script>
    alert("El profesor ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_profesor.php");
}

exit;
?>
