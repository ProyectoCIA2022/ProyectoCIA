<?php
     // session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos del Profesor</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>
    <form action="procesar_actualizar_profesor.php" method="post">
      <h2>ACTUALIZAR LISTADO DE PROFESOR</h2>
      <?php
          $id = $_GET["id"];
          $sql = "SELECT * FROM profesor WHERE idProfesor='$id'";
          $resultado = mysqli_query($conexion, $sql);

          While($mostrar = mysqli_fetch_assoc($resultado)) {
     ?>
      <div>
        <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['idProfesor'] ?>" required>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nomProfesor'] ?>" required>
        <input type="text" name="apellido" placeholder="Apellidos"  value="<?php echo $mostrar['apeProfesor'] ?>" required>
        <input type="text" name="cedula" placeholder="Cedula"  value="<?php echo $mostrar['cedula'] ?>" required>
        <input type="text" name="direccion" placeholder="Direccion"  value="<?php echo $mostrar['direccion'] ?>" required>
        <input type="text" name="usuario" placeholder="Usuario" value="<?php echo $mostrar['usuario'] ?>" required>
        <input type="password" name="clave" placeholder="Contraseña" value="<?php echo $mostrar['clave'] ?>" required>
        <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $mostrar['telProfesor'] ?>" required>
        <input type="email" name="correo" placeholder="Correo" value="<?php echo $mostrar['correoProfesor'] ?>" required>
        <input type="text" name="estado" placeholder="Estado" value="<?php echo $mostrar['estado'] ?>" required>
        <input type="text" name="curso" placeholder="Curso" value="<?php echo $mostrar['idCurso'] ?>" required>
          <input type="submit" value="Actualizar"/>
        <p>click para salir <a href="mostrar_datos_profesor.php">Click Aquí</a></p>
      </div>
      <?php
    }
      ?>
  </form>
  </body>
</html>
