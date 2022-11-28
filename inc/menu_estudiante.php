<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../assets/icons/logo-prot.png">
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>
    <div class="btn">
      <span><img src="../assets/icons/align-justify.svg" alt=""></span>
    </div>
    <nav class="sidebar lateral">
      <div class="text">Sistema Escolar</div>
      <ul>
        <li class="active">
             <a href="#">Inicio</a>
        </li>
        <li class="">
             <a href="perfil_estudiante.php">Mi Perfil</a>
        </li>
        <li>
          <a class="aca-btn">Academico
            <span class="fas fa-caret-down primero"></span>
          </a>
          <ul class="aca-show">
            <li>
                 <a href="horario_estudiante.php">Horario</a>
            </li>
            <li>
                 <a href="examenes_estudiante.php">Examenes</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="notas_estudiante.php">Calificaciones</a>
        </li>
      </ul>
    </nav>

    <div class="barra_baja">
      <a class="btn_cerrar" href="cerrar_sesion.php?cerrar=yes"><img src="../assets/icons/arrow-out.svg" alt=""></a>
    </div>

    <script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.aca-btn').click(function(){
        $('.lateral ul .aca-show').toggleClass("show");
        $('.lateral ul .primero').toggleClass("rotate");
      });
      $('.asis-btn').click(function(){
        $('.lateral ul .asis-show').toggleClass("show1");
        $('.lateral ul .segundo').toggleClass("rotate");
      });
      $('.calif-btn').click(function(){
        $('.lateral ul .calif-show').toggleClass("show3");
        $('.lateral ul .cuarto').toggleClass("rotate");
      });
      $('.cuenta-btn').click(function(){
        $('.lateral ul .cuenta-show').toggleClass("show4");
        $('.lateral ul .quinto').toggleClass("rotate");
      });
      $('.anun-btn').click(function(){
        $('.lateral ul .anun-show').toggleClass("show5");
        $('.lateral ul .quinto').toggleClass("rotate");
      });
      $('.infor-btn').click(function(){
        $('.lateral ul .infor-show').toggleClass("show6");
        $('.lateral ul .quinto').toggleClass("rotate");
      });
      $('.admin-btn').click(function(){
        $('.lateral ul .admin-show').toggleClass("show7");
        $('.lateral ul .quinto').toggleClass("rotate");
      });
      $('.lateral ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
  </body>
</html>
