<?php
include("../bd/conexion.php");
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$profesor = $_POST["profesor"];

$insertar = "INSERT INTO materias
(idMateria,nomMateria,idProfesor)VALUES('$id','$nombre','$profesor')";

$verificar_id = mysqli_query($conexion, "SELECT * FROM materias WHERE idMateria='$id'");

if(mysqli_num_rows($verificar_id) > 0) {
  echo '<script>
        alert("La materia ya esta registrado.");
        window.history.back();
        </script>';

        exit;
}

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM materias WHERE nomMateria='$nombre'");

if(mysqli_num_rows($verificar_nombre) > 0) {
    echo '<script>
    alert("El nombre de la materia ya esta registrado.");
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
    alert("La materia ha sido registrado.");
    window.history.back();
    <script>';
    header("location: mostrar_datos_materias.php");
}

exit;
?>
