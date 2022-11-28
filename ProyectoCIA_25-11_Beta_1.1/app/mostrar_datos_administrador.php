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
      <!-- <div class="header">Parte visual</div> -->
      <div class="cont_buton">
      <h1 class="titulo_tabla">Listado de Administradores</h1>
       <p><a href="registrar_Admin.php"><input class="buton_tabla" type="submit" value="Añadir administrador"/></a></p>
      </div>
      <div class="contenedor_ad">
      <table class="tabla_sistem">
        <tr>
          <th class="campos_th">Nombre</th>
          <th class="campos_th">Apellido</th>
          <th class="campos_th">Cedula</th>
          <th class="campos_th">Direccion</th>
          <th class="campos_th">Usuario</th>
          <th class="campos_th">Clave</th>
          <th class="campos_th">Telefono</th>
          <th class="campos_th">Operacion</th>
        </tr>
        </div>
        <?php
            $sql = "SELECT * FROM administrador";
            $resultado = mysqli_query($conexion, $sql);

            while($mostrar = mysqli_fetch_assoc($resultado)) {
        ?>
        <tr>
          <td class="campos_td"><?php echo $mostrar['nomAdmin'] ?></td>
          <td class="campos_td"><?php echo $mostrar['apeAdmin'] ?></td>
          <td class="campos_td"><?php echo $mostrar['cedula'] ?></td>
          <td class="campos_td"><?php echo $mostrar['direccion'] ?></td>
          <td class="campos_td"><?php echo $mostrar['usuario'] ?></td>
          <td class="campos_td"><?php echo $mostrar['clave'] ?></td>
          <td class="campos_td"><?php echo $mostrar['telAdmin'] ?></td>
          <td class="campos_td">
            <div class="opcion_icon">
              <a class="opcion_tablas" href="modificarDatos_admin.php?id=<?php echo $mostrar['idAdministrador'];?>"><img src="../assets/icons/edit.svg" alt="Editar"> </a> |
              <a class="opcion_tablas" href="Eliminar_datos_admin.php?id=<?php echo $mostrar['idAdministrador'] ?>"class="textoEliminar"><img src="../assets/icons/trash.svg" alt="Eliminar"> </a>
            </div>
          </td>
        </tr>
        <?php
  }
        ?>
      </table>
      
    </div>

   
  </body>
</html>
