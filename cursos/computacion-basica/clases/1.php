<?php include('../../../app/helpers/cursos/name_cursos/computacion_basica.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <title><?php echo $titlo_curso_cb_ep1; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="https://cdneddukate.000webhostapp.com/favicon-eddukate-new.png" rel="icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <!-- Bootstrap CSS File -->
    <link href="../../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body style="background: #222831;">
      <!-- Header nav -->
      <?php include('../../../app/helpers/nav/nav_black.php') ?>
      <!-- / Header Nav --> 

      <!-- Video -->

      <section id="video-livestream">
            <div class="chat-stream" style="background: #22303a;">
                <div class="chat-title">
                    <h1>Temario</h1>
                    <hr>
                </div>
                <?php include('../../../app/helpers/cursos/name_cursos/computacion_basica_html.php'); ?>
            </div>
                
        <div class="video-stream">
            
            <!-- Video en Youtube
             <iframe width="820" height="480" src="https://www.youtube.com/embed/cIrDqBSUrYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             -->

             <iframe src="https://player.vimeo.com/video/388901109" width="820" height="480" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              <!-- Source Video 
            <video controls height="480" width="820" controlslist="nodownload">
                <source src="<?php echo $video_curso_cb_ep1;  ?>" type="video/mp4" >
            </video>
             -->
       </div>
       <br>

        <div class="description-live">
            <h1 style="color: white; font-size: 20px;"><?php echo $titlo_curso_cb_ep1; ?></h1>
            <a style="color: #66d1ff; font-size: 15px; margin-left: 17px"><?php echo $titlo_curso_cb; ?></a> <br>
            <a  style="color: #ffba42; font-size: 15px; margin-left: 17px"> <i class="fa fa-user" aria-hidden="true"></i> Prof. <?php echo $nombre_profesor_cb ?></a>
        </div>
      </section>


      <!-- Javascripts Scripts -->
      <script src="../../../app/router/js/router.js"></script>
      <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
      <script src="../../../public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../../../public/lib/easing/easing.min.js"></script>
      <script src="../../../public/lib/mobile-nav/mobile-nav.js"></script>
      <script src="../../../public/lib/wow/wow.min.js"></script>
      <script src="../../../public/lib/waypoints/waypoints.min.js"></script>
      <script src="../../../public/lib/counterup/counterup.min.js"></script>
      <script src="../../../public/lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="../../../public/lib/isotope/isotope.pkgd.min.js"></script>
      <script src="../../../public/lib/lightbox/js/lightbox.min.js"></script>
</body>
</html>