<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Tutores</title>
  </head>
  <body>

    <?php
      include ("../inc/menu_administrador.php");
    ?>

    <form action="anadir_tutor.php" method="post">
      <h2>Registro de Tutores</h2>
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
      <label for="telefono">Telefono </label>
      <input type="tel" name="telefono" placeholder="Telefono" required>
      <br>
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_tutores.php">Salir</a>
    </form>
  </body>
</html>
