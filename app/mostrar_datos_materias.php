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
          <h1 class="titulo_tabla">Listado de Materias</h1>
          <p><a href="registrar_materia.php"><input class="buton_tabla" type="submit" value="Añadir materia"/></a></p>
        </div>

        <div class="contenedor_ad">
          <table class="tabla_sistem">
            <tr>
              <th class="campos_th">Nombre Materia</th>
              <th class="campos_th">Operacion</th>
            </tr>
              
            <?php
              $sql = "SELECT * FROM materias ";
              $resultado = mysqli_query($conexion, $sql);

              while($mostrar = mysqli_fetch_assoc($resultado)) {
            ?>
            
            <tr>
              <td class="campos_td"><?php echo $mostrar['nomMateria'] ?></td>
              <td class="campos_td">
                <div class="">
                  <a href="modificarDatos_materia.php?id=<?php echo $mostrar['idMateria'];?>"><img src="../assets/icons/edit.svg" alt="Editar"></a> |
                  <a href="Eliminar_datos_materia.php?id=<?php echo $mostrar['idMateria'] ?>"class="textoEliminar"><img src="../assets/icons/trash.svg" alt="Eliminar"></a>
                </div>
              </td>
            </tr>
              
            <?php
    }
            ?>

          </table>
        <div>
       
      </div>
    </div>

  </body>
</html>
