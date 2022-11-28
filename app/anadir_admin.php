<?php
include("../bd/conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO administrador
(nomAdmin,apeAdmin,cedula,direccion,usuario,clave,telAdmin)VALUES('$nombre','$apellido','$cedula','$direccion','$usuario','$clave','$telefono')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM administrador WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0) {
  echo '<script>
        alert("El Estudiante ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_apellido = mysqli_query($conexion, "SELECT * FROM administrador WHERE apeAdmin='$apellido'");

if(mysqli_num_rows($verificar_apellido) > 0) {
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
    alert("El administrador ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_administrador.php");
}

exit;
?>
