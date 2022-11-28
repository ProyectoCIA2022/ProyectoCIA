<?php
     session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos del tutor</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
    <form action="procesar_actualizar_tutor.php" method="post">
      <h2>ACTUALIZAR Lista De Tutor</h2>
      <?php
          $id = $_GET["id"];
          $sql = "SELECT * FROM tutores WHERE idTutor='$id'";
          $resultado = mysqli_query($conexion, $sql);

          While($mostrar = mysqli_fetch_assoc($resultado)) {
     ?>
      <div>
        <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['idTutor'] ?>" required>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nomTutor'] ?>" required>
        <input type="text" name="apellido" placeholder="Apellidos"  value="<?php echo $mostrar['apeTutor'] ?>" required>
        <input type="text" name="cedula" placeholder="Cedula"  value="<?php echo $mostrar['cedula'] ?>" required>
        <input type="text" name="direccion" placeholder="Direccion"  value="<?php echo $mostrar['direccion'] ?>" required>
        <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $mostrar['telTutor'] ?>" required>
          <input type="submit" value="Actualizar"/>
        <p>Haga click para salir <a href="mostrar_datos_tutores.php">Click aquí</a></p>
      </div>
      <?php
    }
      ?>
  </form>
  </body>
</html>
