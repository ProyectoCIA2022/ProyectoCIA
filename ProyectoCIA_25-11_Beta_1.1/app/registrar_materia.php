<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de materias</title>
  </head>
  <body>

    <?php
      include ("../inc/menu_administrador.php");
    ?>

    <form action="anadir_materia.php" method="post">
      <h2>Registro de Materias</h2>
      <label for="nombre">Nombre </label>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <br>
      <label for="profesor">idProfesor </label>
      <input type="text" name="profesor" placeholder="Nombre" required>
      <br>
        <input type="submit" value="Registrar">
        <a href="mostrar_datos_materias.php">Salir</a>
    </form>
  </body>
</html>
