<?php
include("../bd/conexion.php");
$id = $_POST["id"];
$nombre = $_POST["nombre"];

$insertar = "INSERT INTO cursos
(idCurso,nomCurso)VALUES('$id','$nombre')";

$verificar_id = mysqli_query($conexion, "SELECT * FROM cursos WHERE idCurso='$id'");

if(mysqli_num_rows($verificar_id) > 0) {
  echo '<script>
        alert("El aula ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM cursos WHERE nomCurso='$nombre'");

if(mysqli_num_rows($verificar_nombre) > 0) {
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
    alert("El aula ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_cursos.php");
}

exit;
?>
