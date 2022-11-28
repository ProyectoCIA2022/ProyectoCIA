<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de cursos</title>
  </head>
  <body>

    <?php
    include ("../inc/menu_administrador.php");
    ?>

    <form action="anadir_curso.php" method="post">
      <h2>Registro de Cursos</h2>
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <br>
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_cursos.php">Salir</a>
    </form>
  </body>
</html>
