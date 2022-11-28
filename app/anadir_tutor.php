<?php
include("../bd/conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO tutores
(nomTutor,apeTutor,cedula,direccion,telTutor)VALUES('$nombre','$apellido','$cedula','$direccion','$telefono')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM tutores WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0) {
  echo '<script>
        alert("El tutor ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_apellido = mysqli_query($conexion, "SELECT * FROM tutores WHERE apeTutor='$apellido'");

if(mysqli_num_rows($verificar_apellido) > 0) {
    echo '<script>
    alert("El apellido ya esta registrado.");
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
    alert("El tutor ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_tutores.php");
}

exit;
?>
