<?php
     session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos del Estudiante</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <form action="procesar_actualizar_estudiante.php" method="post">
      <h2>ACTUALIZAR Lista De Estudiante</h2>
      <?php
          $id = $_GET["id"];
          $sql = "SELECT * FROM alumnos WHERE idAlumno='$id'";
          $resultado = mysqli_query($conexion, $sql);

          While($mostrar = mysqli_fetch_assoc($resultado)) {
     ?>
      <div>
        <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['idAlumno'] ?>" required>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nomAlumno'] ?>" required>
        <input type="text" name="apellido" placeholder="Apellidos"  value="<?php echo $mostrar['apeAlumno'] ?>" required>
        <input type="text" name="edad" placeholder="Edad"  value="<?php echo $mostrar['edad'] ?>" required>
        <input type="text" name="direccion" placeholder="Direccion"  value="<?php echo $mostrar['direccion'] ?>" required>
        <input type="text" name="usuario" placeholder="Usuario" value="<?php echo $mostrar['usuario'] ?>" required>
        <input type="password" name="clave" placeholder="Contraseña" value="<?php echo $mostrar['clave'] ?>" required>
        <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $mostrar['telAlumno'] ?>" required>
        <input type="email" name="correo" placeholder="Correo" value="<?php echo $mostrar['correoAlumno'] ?>" required>
        <input type="date" name="fecha" placeholder="Nacimiento" value="<?php echo $mostrar['nacFecha'] ?>" required>
        <input type="text" name="tutor" placeholder="Tutor" value="<?php echo $mostrar['idTutores'] ?>" required>
        <input type="text" name="curso" placeholder="Curso" value="<?php echo $mostrar['idCurso'] ?>" required>
          <input type="submit" value="Actualizar"/>
        <p>Haga click para salir <a href="mostrar_datos_estudiante.php">Click aquí</a></p>
      </div>
      <?php
    }
      ?>
  </form>
  </body>
</html>
