<?php include('../app/helpers/header/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title_live; ?></title>
     <!-- Favicons -->
     <link href="https://cdneddukate.000webhostapp.com/favicon-eddukate-new.png" rel="icon">
     <!-- Estilos -->
     <link rel="stylesheet" href="../public/css/style.css">
     <link rel="stylesheet" href="../public/css/styles.css">
     <!-- Bootstrap CSS File -->
     <link href="../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
     <!-- Libraries CSS Files -->
     <link href="../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="../public/lib/animate/animate.min.css" rel="stylesheet">
     <link href="../public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
     <link href="../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="../public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
 
     <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
     <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body style="background: #222831;">

      <!-- Header nav -->
      <?php include('../app/helpers/nav/nav_black.php') ?>
      <!-- / Header Nav --> 

      <section id="video-livestream">
            <div class="chat-stream" style="background: #22303a;">
                <div class="chat-title">
                    <h1>Chat en vivo</h1>
                    <hr>
                </div>
                    <div class="write-chat">
                        <center>
                    <iframe src="https://www.twitch.tv/embed/eddukate/chat" frameborder="0" scrolling="no" height="428" width="400"></iframe>
                        </center>
                    </div>
            </div>
                
        <div class="video-stream">
            
            <!-- Video en Youtube
             <iframe width="820" height="480" src="https://www.youtube.com/embed/cIrDqBSUrYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             -->

        <!-- TWITCH -->

        <iframe src="https://player.twitch.tv/?channel=eddukate" frameborder="0" allowfullscreen="true" scrolling="no" height="480" width="820"></iframe>
              <!-- Source Video 
            <video controls height="480" width="820">
                <source src="video/test.mp4" type="video/mp4">
            </video>
            -->
       </div>
       <br>

        <div class="description-live">
            <h1 style="color: white; font-size: 20px;"> <!-- <span>En vivo</span>--> EdduLive - Noticias de tecnología y desarrollo.</h1>
        </div>
      </section>


      <!-- Javascripts Scripts -->
      <script src="../app/router/js/router.js"></script>
      <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
      <script src="../public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../public/lib/easing/easing.min.js"></script>
      <script src="../public/lib/mobile-nav/mobile-nav.js"></script>
      <script src="../public/lib/wow/wow.min.js"></script>
      <script src="../public/lib/waypoints/waypoints.min.js"></script>
      <script src="../public/lib/counterup/counterup.min.js"></script>
      <script src="../public/lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="../public/lib/isotope/isotope.pkgd.min.js"></script>
      <script src="../public/lib/lightbox/js/lightbox.min.js"></script>
</body>
</html>