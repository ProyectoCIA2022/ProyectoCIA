<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Administrador</title>
  </head>
  <body>

  <?php
    include ("../inc/menu_administrador.php");
  ?>
      <form action="anadir_admin.php" method="post">
      
        <h2>Registro de Administrador</h2>
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <br>
        <label for="apellido">Apellido </label>
        <input type="text" name="apellido" placeholder="apellido"  required>
        <br>
        <label for="cedula">Cedula </label>
        <input type="text" name="cedula" placeholder="cedula"  required>
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
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_administrador.php">Salir</a>
      </form>
  </body>
</html>
