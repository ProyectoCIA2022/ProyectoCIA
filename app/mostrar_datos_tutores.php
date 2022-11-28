<?php
  session_start();
  include('../bd/conexion.php');
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

    <?php
    include ("../inc/menu_administrador.php");
    ?>

    <div class="content_sistema">
      <div class="cont_tablas">

        <div class="cont_buton">
          <h1 class="titulo_tabla">Listado de Tutores</h1>
          <p><a href="registrar_tutor.php"><input class="buton_tabla" type="submit" value="Añadir Tutor"/></a></p>
        </div>

        <div class="contenedor_ad">
          <table class="tabla_sistem">
            <tr>
              <th class="campos_th">Nombre</th>
              <th class="campos_th">Apellido</th>
              <th class="campos_th">Cedula</th>
              <th class="campos_th">Direccion</th>
              <th class="campos_th">Telefono</th>
              <th class="campos_th">Operacion</th>
            </tr>

          <?php
            $sql = "SELECT * FROM tutores";
            $resultado = mysqli_query($conexion, $sql);

            while($mostrar = mysqli_fetch_assoc($resultado)) {
          ?>

            <tr>
              <td class="campos_td"><?php echo $mostrar['nomTutor'] ?></td>
              <td class="campos_td"><?php echo $mostrar['apeTutor'] ?></td>
              <td class="campos_td"><?php echo $mostrar['cedula'] ?></td>
              <td class="campos_td"><?php echo $mostrar['direccion'] ?></td>
              <td class="campos_td"><?php echo $mostrar['telTutor'] ?></td>
              <td class="campos_td">
                <div class="opcion_icon">
                  <a class="opcion_tablas" href="modificarDatos_tutor.php?id=<?php echo $mostrar['idTutor'];?>"><img src="../assets/icons/edit.svg" alt="Editar"></a> |
                  <a class="opcion_tablas" href="Eliminar_datos_tutor.php?id=<?php echo $mostrar['idTutor'] ?>"class="textoEliminar"><img src="../assets/icons/trash.svg" alt="Eliminar"></a>
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
