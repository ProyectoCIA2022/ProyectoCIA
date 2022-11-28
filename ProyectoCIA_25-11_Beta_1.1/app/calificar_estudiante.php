<?php
     session_start();
     include('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calificar Estudiantes</title>
</head>
<body>

  <?php
    include ("../inc/menu_profesor.php");
  ?>

  <div class="content_sistema">
    <div class="cont_tablas">
            <table class="tabla_student" border="1">
          <tr>
            <th>Alumno</th>
            <th>Apellido</th>
            <th>P/N</th>
            <th>S/N</th>
            <th>T/N</th>
            <th>F/N</th>
            <th>Operacion</th>
          </tr>
          </div>
          <?php
              $sql = "SELECT * FROM calificaciones c JOIN alumnos a ON c.idCalificaciones = a.idAlumno";
              $resultado = mysqli_query($conexion, $sql);

              while($mostrar = mysqli_fetch_assoc($resultado)) {
          ?>
          <tr>
            <td><?php echo $mostrar['nomAlumno'] ?></td>
            <td><?php echo $mostrar['apeAlumno'] ?></td>
            <td><?php echo $mostrar['calificacionP'] ?></td>
            <td><?php echo $mostrar['calificacionS'] ?></td>
            <td><?php echo $mostrar['calificacionT'] ?></td>
            <td><?php echo $mostrar['calificacionC'] ?></td>
            <td>
              <div class="">
                <a href="calificar_estudiante.php">Listo|</a>
                <a href="modificar_nota.php">Modificar</a>
              </div>
            </td>
          </tr>
          <?php
        }
          ?>
        </table>
        <a href="mostrar_datos_estudiante_profesor.php">Volver</a>

    </div>
  </div>

</body>
</html>
