<!-- <?php
session_start();
require_once ('../bd/conexion.php');

$consulta = "SELECT A.idAlumno, A.nomAlumno, A.apeAlumno, A.idCurso, U.idUser, U.usuario, U.clave FROM alumnos as A INNER JOIN usuario as U ON usuario='$_SESSION['user']' and clave='$_SESSION['pass']' AND id_User = idUser";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
                
                
        $_SESSION['IDAlumno'] = $fila['A.idAlumno'];         
        $_SESSION['Nom_Alumno'] = $fila['A.nomAlumno'];
        $_SESSION['AP_alumno'] = $fila['A.apeAlumno'];
        $_SESSION['IDcurso'] = $fila['A.idCurso'];
      
        $ID_Estudiante = $_SESSION['IDAlumno'];
        $NOM_Estudiante = $_SESSION['Nom_Alumno'];
        $AP_Estudiante = $_SESSION['AP_alumno'];
        $ID_Curso = $_SESSION['IDcurso'];
?> -->
<!-- <?php
session_start();
require_once ('../bd/conexion.php');

$consulta = "SELECT A.idAlumno, A.nomAlumno, A.apeAlumno, A.idCurso, U.idUser, U.usuario, U.clave FROM alumnos as A INNER JOIN usuario as U ON usuario='$_SESSION['user']' and clave='$_SESSION['pass']' AND id_User = idUser";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
                
                
        $_SESSION['IDAlumno'] = $fila['A.idAlumno'];         
        $_SESSION['Nom_Alumno'] = $fila['A.nomAlumno'];
        $_SESSION['AP_alumno'] = $fila['A.apeAlumno'];
        $_SESSION['IDcurso'] = $fila['A.idCurso'];
?>
<?php
session_start();
require_once ('../bd/conexion.php');

$consulta = "SELECT A.idAlumno, A.nomAlumno, A.apeAlumno, A.idCurso, U.idUser, U.usuario, U.clave FROM alumnos as A INNER JOIN usuario as U ON usuario='$_SESSION['user']' and clave='$_SESSION['pass']' AND id_User = idUser";
$resultado = mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_array($resultado);
                
                
        $_SESSION['IDAlumno'] = $fila['A.idAlumno'];         
        $_SESSION['Nom_Alumno'] = $fila['A.nomAlumno'];
        $_SESSION['AP_alumno'] = $fila['A.apeAlumno'];
        $_SESSION['IDcurso'] = $fila['A.idCurso'];
?> -->

