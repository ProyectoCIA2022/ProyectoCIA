<?php
     session_start();
if ($_SESSION['rol']!=1){
  header('Location:../login.php');
}
include ("../inc/menu_administrador.php");
require_once ("../inc/session.php");
require_once ('../bd/conexion.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SISTEMA ESCOLAR</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>

    <div class="content_sistema">
      <div class="cont_tablas">

        <div class="cont_buton">
          <h1 class="titulo_tabla">Listado de Estudiante</h1>
          <p><a href="registrar_estudiante.php"><input class="buton_tabla" type="submit" value="Añadir Estudiante"/></a></p>
        </div>
         
        <div class="contenedor_ad">
          <table class="tabla_sistem">
            <tr>
              <th class="campos_th">Nombre</th>
              <th class="campos_th">Apellido</th>
              <th class="campos_th">Edad</th>
              <th class="campos_th">Direccion</th>
              <th class="campos_th">Telefono</th>
              <th class="campos_th">correo</th>
              <th class="campos_th">Fecha nacimiento</th>
              <th class="campos_th">Nombre Tutor</th>
              <th class="campos_th">Curso</th>
              <th class="campos_th">Operacion</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tutores";
            $resultado = mysqli_query($conexion, $sql);
            ?>
        
            <?php
              $sql = "SELECT * FROM alumnos AS a JOIN cursos AS c ON a.id_Curso = c.idCurso JOIN tutores AS t ON a.id_Tutores = t.idTutor";
              $resultado = mysqli_query($conexion, $sql);

              while($mostrar = mysqli_fetch_assoc($resultado)) {
            ?>
          
            <tr>
              <td class="campos_td"><?php echo $mostrar['nomAlumno'] ?></td>
              <td class="campos_td"><?php echo $mostrar['apeAlumno'] ?></td>
              <td class="campos_td"><?php echo $mostrar['edad'] ?></td>
              <td class="campos_td"><?php echo $mostrar['direccion'] ?></td>
              <td class="campos_td"><?php echo $mostrar['telAlumno'] ?></td>
              <td class="campos_td"><?php echo $mostrar['correoAlumno'] ?></td>
              <td class="campos_td"><?php echo $mostrar['nacFecha'] ?></td>
              <td class="campos_td"><?php echo $mostrar['nomTutor'] ?></td>
              <td class="campos_td"><?php echo $mostrar['nomCurso'] ?></td>
              <td class="campos_td">
                <div class="opcion_icon">
                  <a  class="opcion_tablas" href="modificarDatos_estudiante.php?id=<?php echo $mostrar['idAlumno']; ?>"><img src="../assets/icons/edit.svg" alt="Editar"></a> |
                  <a  class="opcion_tablas" href="Eliminar_datos.php?id=<?php echo $mostrar['idAlumno'] ?>"class="textoEliminar"><img src="../assets/icons/trash.svg" alt="Eliminar"></a>
                </div>
              </td>
            </tr>

          <?php
    }
          ?>

          </table>
        </div>

      </div>
    </div>

  </body>
</html>
