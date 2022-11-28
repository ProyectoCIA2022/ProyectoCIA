<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Profesor</title>
  </head>
  <body>

    <?php
      include ("../inc/menu_administrador.php");
    ?>

    <form action="anadir_profesor.php" method="post">
      <h2>Registro de Profesores</h2>
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <br>
      <label for="apellido">Apellido </label>
      <input type="text" name="apellido" placeholder="Apellido"  required>
      <br>
      <label for="cedula">Cedula </label>
      <input type="text" name="cedula" placeholder="Cedula" required>
      <br>
      <label for="direccion">Direccion </label>
      <input type="text" name="direccion" placeholder="Direccion" required>
      <br>
      <label for="usuario">Usuario </label>
      <input type="text" name="usuario" placeholder="Usuario" required>
      <br>
      <label for="clave">Clave </label>
      <input type="password" name="clave" placeholder="Clave" required>
      <br>
      <label for="telefono">Telefono </label>
      <input type="tel" name="telefono" placeholder="Telefono" required>
      <br>
      <label for="correo">Correo </label>
      <input type="text" name="correo" placeholder="Correo" required>
      <br>
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_profesor.php">Salir</a>
    </form>
  </body>
</html>
