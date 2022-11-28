<?php
     session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos del curso</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
    <form action="procesar_actualizar_cursos.php" method="post">
      <h2>ACTUALIZAR Lista De Cursos</h2>
      <?php
          $id = $_GET["id"];
          $sql = "SELECT * FROM cursos WHERE idCurso='$id'";
          $resultado = mysqli_query($conexion, $sql);

          While($mostrar = mysqli_fetch_assoc($resultado)) {
     ?>
      <div>
        <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['idCurso'] ?>" required>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nomCurso'] ?>" required>
          <input type="submit" value="Actualizar"/>
        <p>Haga click para salir <a href="mostrar_datos_cursos.php">Click aquí</a></p>
      </div>
      <?php
    }
      ?>
  </form>
  </body>
</html>
