<?php
     session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos de la materia</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <form action="procesar_actualizar_materia.php" method="post">
      <h2>ACTUALIZAR Lista De Materia</h2>
      <?php
          $id = $_GET["id"];
          $sql = "SELECT * FROM materias WHERE idMateria='$id'";
          $resultado = mysqli_query($conexion, $sql);

          While($mostrar = mysqli_fetch_assoc($resultado)) {
     ?>
      <div>
        <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['idMateria'] ?>" required>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nomMateria'] ?>" required>
        <input type="text" name="profesor" placeholder="profesor" value="<?php echo $mostrar['idProfesor'] ?>" required>
          <input type="submit" value="Actualizar"/>
        <p>Haga click para salir <a href="mostrar_datos_materias.php">Click aquí</a></p>
      </div>
      <?php
    }
      ?>
  </form>
  </body>
</html>
