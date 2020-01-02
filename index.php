<?php include('app/helpers/header/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <!-- Favicons -->
    <link href="public/favicon.png" rel="icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Bootstrap CSS File -->
    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>


    <!-- Header Nav -->
      <?php include('app/helpers/nav.php'); ?>
      <!-- / Header Nav --> 

      <?php /* include('app/helpers/sponsor/sponsor.php') */ ?>


      <!-- Cursos nuevos -->
      <section id="intro" class="clearfix">
            <br><br>
            <div class="container">
                <div class="intro-img">
                  <img src="https://images.vexels.com/media/users/3/145821/isolated/preview/44247e29bf035ece825b8b2bf8af88c2-ilustraci--n-de-cohete-ilustraci--n-de-cohete-by-vexels.png"  class="img-fluid">
                </div>
                <div class="intro-info">
                  <h2>Descubre tu potencial 
                    <p>
                    <span style="color: #00CBFF">construye tu futuro.</span>  <h2>
                  <h1>Encuentra el trabajo de tus sueños en el ámbito de la tecnología, crea tu futuro y descubre tu potencial. Tu futuro está en tus manos.</h1>
                  <br><br>
                  <div>
                    <a href="cursos/" class="btn-get-started scrollto">Empezamos</a>
                  </div>
                </div>
      </section>


        <!-- Nuevo curso 2  -->
        <?php /* include('app/helpers/new_curso_2.php'); */ ?>
        <!-- Nuevo curso 2  -->
      <br>


      <!-- Cursos -->
        <?php include('app/helpers/cursos.php') ?>
      <!-- Cursos  -->
        <br><br><br><br>


        <!-- Nuevos cursos  -->
         <?php include('app/helpers/new_cursos.php') ?>
        <!-- / Nuevos cursos -->


      <br><br><br>
      <main id="estudiar-online">
            <div class="header-online">
                    <h1>Por qué estudiar en Eddukate</h1>
            </div>
            <div class="info-online">
                    <svg class="svg" x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                    <section class="pt-6 pb-8 bg-default overflow-hidden">
                            <div class="metodos-pagos-new">
                                    <h1>Aprende a tu ritmo</h1>
                                     <p>Aprende una nueva tecnología o refuerza tus materias <p>de la universidad o el instituto y asegura tu empleabilidad.</p></p>
                                     <center>
                                      <h1>Profesionales</h1>
                                      <p>La tecnología cambia demasiado rápido. <p>Mantente actualizado siempre, no seas un profesional obsoleto.</p></p>
                                      
                                      <h1>Certificados</h1>
                                      <p>Recibe un reconocimiento cada vez que termines un curso, workshop o especialidad.</p>
                                      <a href="cursos/"><button class="btn btn-success">Empieza ya!</button></a>
                                     <br><br>
                                     <!--
                                      <div class="agenda-proximos">
                                         <a href=""><span style="font-size: 20px; color: black;">¿En qué estamos trabajando?</span></a> 
                                        
                                        </div>
                                      -->
                                 </center>
                                 <br><br><br>
                                 </div>
                    </section>
            </div>
        </div>
      </main>
        <!--==========================
          Footer
        ============================-->

        <?php include('app/helpers/footer.php') ?>
       <!-- #footer -->
        <!-- JavaScript Libraries -->
        <script src="public/js/count_2.js"></script>
        <script src="public/js/count.js"></script>
        <script src="public/lib/jquery/jquery.min.js"></script>
        <script src="public/lib/jquery/jquery-migrate.min.js"></script>
        <script src="public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="public/lib/easing/easing.min.js"></script>
        <script src="public/lib/mobile-nav/mobile-nav.js"></script>
        <script src="public/lib/wow/wow.min.js"></script>
        <script src="public/lib/waypoints/waypoints.min.js"></script>
        <script src="public/lib/counterup/counterup.min.js"></script>
        <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="public/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="public/lib/lightbox/js/lightbox.min.js"></script>
        <!-- Contact Form JavaScript File -->
</body>
</html>