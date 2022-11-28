<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SISTEMA ESCOLAR</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>
    <div class="btn">
      <span><img src="../assets/icons/align-justify.svg" alt=""></span>
    </div>
    <nav class="sidebar lateral">
      <div class="text">Sistema Escolar</div>
      <ul>
        <li class="active"><a href="home_administrador.php">Inicio</a></li>
        <li class=""><a href="mostrar_datos_estudiante.php">Estudiantes</a></li>
        <li class=""><a href="mostrar_datos_profesor.php">Profesores</a></li>
        <li class=""><a href="mostrar_datos_tutores.php">Tutores</a></li>
        <li><a href="#">Examenes</a></li>
        <li>
          <a href="#" class="aca-btn">Academico
            <span class="fas fa-caret-down primero"></span>
          </a>
          <ul class="aca-show">
            <li><a href="mostrar_datos_cursos.php">Cursos</a></li>
            <li><a href="mostrar_datos_materias.php">Materias</a></li>
            <!-- <li><a href="#">Horario</a></li> -->
          </ul>
        </li>
        <!-- <li>
          <a href="#" class="anun-btn">Anuncios
            <span class="fas fa-caret-down sexto"></span>
          </a>
          <ul class="anun-show">
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Eventos</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="infor-btn">Informes
            <span class="fas fa-caret-down setimo"></span>
          </a>
          <ul class="infor-show">
            <li><a href="#">Informes de Clase</a></li>
          </ul>
        </li> -->
        <li>
          <a href="#" class="admin-btn">Administrador
            <span class="fas fa-caret-down obtavo"></span>
          </a>
          <ul class="admin-show">
            <li><a href="#">Año Academico</a></li>
            <li><a href="mostrar_datos_administrador.php">Administrador del Sistema</a></li>
            <li><a href="#">Restablecer Contraseña</a></li>
            <!-- <li><a href="#">Roles</a></li> -->
          </ul>
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
      // $('.anun-btn').click(function(){
      //   $('.lateral ul .anun-show').toggleClass("show5");
      //   $('.lateral ul .quinto').toggleClass("rotate");
      // });
      // $('.infor-btn').click(function(){
      //   $('.lateral ul .infor-show').toggleClass("show6");
      //   $('.lateral ul .quinto').toggleClass("rotate");
      // });
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
