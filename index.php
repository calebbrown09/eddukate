<?php include('app/helpers/header/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <!-- Favicons -->
    <link href="https://cdneddukate.000webhostapp.com/favicon-eddukate-new.png" rel="icon">
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
                    <span style="color: #00CBFF">Construye tu futuro.</span>  <h2>
                  <h1 style="font-size: 22px"><b>Educación Efectiva.</b> ¡No solamente queremos mejorar tu educación, también queremos mejorar tu estilo de vida!</h1>
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


      <br>


      <!-- Nuevos cursos  -->
      <?php include('app/helpers/new_cursos.php') ?>
      <!-- / Nuevos cursos -->

      <br>
       <!-- Ad Podcast -->

      <?php /* include('app/helpers/sponsor/podast_ad.php'); */?>

      <!-- Premium Ad -->

      <?php include('app/helpers/sponsor/premium.php'); ?> 

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