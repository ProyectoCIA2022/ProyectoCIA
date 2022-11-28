<?php
include("../bd/conexion.php");

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
$curso = $_POST["curso"];


$insertar = "INSERT INTO alumnos
(nomAlumno,apeAlumno,edad,direccion,usuario,clave,telAlumno,correoAlumno,nacFecha,idTutores,idCurso)VALUES('$nombre','$apellido','$edad','$direccion','$usuario','$clave','$telefono','$correo','$fecha','$tutor','$curso')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM alumnos WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0) {
  echo '<script>
        alert("El Estudiante ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM alumnos WHERE correoAlumno='$correo'");

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
    alert("El Estudiante ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_estudiante.php");
}

exit;
?>
