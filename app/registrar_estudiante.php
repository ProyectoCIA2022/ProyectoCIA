<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Estudiante</title>
  </head>
  <body>

    <?php
      include ("../inc/menu_administrador.php");
    ?>

    <form action="anadir_estudiante.php" method="post">
      <h2>Registro de Estudiantes</h2>
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <br>
      <label for="apellido">Apellido </label>
      <input type="text" name="apellido" placeholder="apellido"  required>
      <br>
      <label for="edad">Edad </label>
      <input type="text" name="edad" placeholder="edad" required>
      <br>
      <label for="direccion">Direccion </label>
      <input type="text" name="direccion" placeholder="direccion" required>
      <br>
      <label for="usuario">Usuario </label>
      <input type="text" name="usuario" placeholder="usuario" required>
      <br>
      <label for="clave">Clave </label>
      <input type="password" name="clave" placeholder="clave" required>
      <br>
      <label for="telefono">Telefono </label>
      <input type="tel" name="telefono" placeholder="Telefono" required>
      <br>
      <label for="correo">Correo </label>
      <input type="text" name="correo" placeholder="correo" required>
      <br>
      <label for="fecha">Fecha Nacimiento </label>
      <input type="text" name="fecha" placeholder="Nacimiento">
      <br>
      <label for="tutor">Tutor </label>
      <input type="text" name="tutor" placeholder="Tutor">
      <br>
      <label for="curso">Curso </label>
      <input type="text" name="curso" placeholder="Curso">
      <br>
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_estudiante.php">Salir</a>
    </form>
  </body>
</html>
