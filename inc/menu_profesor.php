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
      <header>
        <div class="text">Sistema Escolar</div>
        <div class="text">
            <span class="text">MENU</span>
        </div>

      </header>

      <ul>
        <li class="active"><a href="#">Inicio</a></li>
        <li class=""><a href="../app/perfil_profesor.php">Mi perfil</a></li>
        <!-- <li class=""><a href="#">estudiantes</a></li>
        <li class=""><a href="#">Usuario</a></li> -->
        <li>
          <a href="#" class="aca-btn">Academico
            <span class=" primero"></span>
          </a>
          <ul class="aca-show">
            <li><a href="#">Curso</a></li>
            <li><a href="#">Horario</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="asis-btn">Asistencias
            <span class=" segundo"></span>
          </a>
          <ul class="asis-show">
            <li><a href="#">Asistencia Estudiante</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="exa-btn">Examenes
            <span class=" tercero"></span>
          </a>
          <ul class="exa-show">
            <li><a href="#">Editar Examenes</a></li>
            <li><a href="#">Horario de Examenes</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="calif-btn">Calificaciones
            <span class=" cuarto"></span>
          </a>
          <ul class="calif-show">
            <li><a href="../app/calificar_estudiante.php">publicar Notas</a></li>
          </ul>
        </li>
        <li>
          <!-- <a href="#" class="anun-btn">Anuncios
            <span class=" sexto"></span>
          </a>
          <ul class="anun-show">
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Eventos</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="#" class="infor-btn">Informes
            <span class="fas fa-caret-down setimo"></span>
          </a>
          <ul class="infor-show">
            <li><a href="#">Informes de Clase</a></li>
          </ul>
        </li> -->

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
      $('.exa-btn').click(function(){
        $('.lateral ul .exa-show').toggleClass("show2");
        $('.lateral ul .tercero').toggleClass("rotate");
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
