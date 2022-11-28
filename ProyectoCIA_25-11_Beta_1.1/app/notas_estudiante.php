<?php
session_start();
    include('../bd/conexion.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calificaciones</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../assets/icons/logo-prot.png">
     <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>
    
    <?php
      include ("../inc/menu_estudiante.php");
    ?>
    <div class="content_sistema">
    
    <div class="cont_tablas_notas">
    <div>
    <?php
    echo "Estudiante ".$_SESSION['Nom_Alumno']. " " .$_SESSION['AP_alumno'];
    echo "Profesor"
    ?>
    </div>
      <div class="cont_buton">
      <h1 class="titulo_tabla">Calificaciones</h1>
       
      </div>
      <table class="tabla_sistem">
       <thead class="">
              <tr>
                   <th class="tit_thead" rowspan="3" scope="col">ASIGNATURAS</th>
                   <th class="tit_thead" colspan="6" scope="col">CALIFICACIONES DEL AÑO ESCOLAR</th>
              </tr>
              <tr>
                   <th class="tit_thead" colspan="6">CALIFICACIONES PARCIALES</th>
              </tr>
              <tr>
                   <th class="tit_thead" scope="col">AGO-OCT</th>
                   <th class="tit_thead" scope="col">NOV-ENE</th>
                   <th class="tit_thead" scope="col">FEB-MAR</th>
                   <th class="tit_thead" scope="col">ABR-JUN</th>
                   <th class="tit_thead" scope="col">C.F.</th>
                   <th class="tit_thead" scope="col">A/R</th>
              </tr>
         </thead>
         
         <?php
         $ID_Estudiante = $_SESSION['IDAlumno'];

          $sql = "SELECT * FROM calificaciones c INNER JOIN materias m ON c.id_Materia = m.idMateria AND id_Alumno = '$ID_Estudiante' ";

          $resultado = mysqli_query($conexion, $sql);

          while ($mostrar = mysqli_fetch_assoc($resultado))
          {
          $nf  = ($mostrar['calificacionP']+$mostrar['calificacionS']+$mostrar['calificacionT']+$mostrar['calificacionC'])/4;;
            ?>
         <tbody>
           <tr>
            <th class="tit_thead" scope="row"><?php echo $mostrar['nomMateria'] ?></th>
            <td class="campos_td"><?php echo $mostrar['calificacionP'] ?></td>
            <td class="campos_td"><?php echo $mostrar['calificacionS'] ?></td>
            <td class="campos_td"><?php echo $mostrar['calificacionT'] ?></td>
            <td class="campos_td"><?php echo $mostrar['calificacionC'] ?></td>
            <td class="campos_td"><?php echo floor($nf) ?></td>
            <td class="campos_td" class="color"><?php if($nf>=70 && $nf<=100){
              echo "<font color=\"gree\">APROBADO</font>";
              }else{
              echo "<font color=\"red\">REPROBADO</font>";
              } ?></td>
           </tr>
           <?php 
        } 
        ?>
         </tbody>
      </table>
    </div>
      </div>

  </body>
</html>
