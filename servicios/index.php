<?php include('../app/helpers/header/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title_servicios; ?></title>
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
<body>
    <!-- Header Nav -->
   <?php include('../app/helpers/nav.php'); ?>
    <!-- / Header Nav --> 
    
    <section id="intro-servicios" class="clearfix">
            <br><br>
            <div class="container">
                <div class="intro-info">
                  <h2>Descubre nuestros servicios 
                    <p>
                    <span style="color: #00CBFF">Mejora tu ambito laboral</span>  <h2>
                  <h1 style="color: #00CBFF; font-size:40px; font-weight: bold;" >Y haz crecer tu equipo! </h1>
                  <br><br>
                </div>
      </section>
    
    <!-- Curso recomendado Ad --> 
    <?php include('../app/helpers/sponsor/curso_recomendado.php'); ?>

    <!-- servicios  -->

    <br><br>
    <section id="servicios-nuevos">
        <div id="title-servicos">
            <h1>Nuestros servicios</h1>
        </div>
        <br>
        <!-- Servicios  -->
        <div id="servicios-temas-description">
            <h1><b>Eddukate School</b></h1>
            <div id="parrafo">
            <p>Las largas filas para matricularte quedaron en el pasado. Ahora puedes matricularte en linea en cualquier colegio del país. Fácil, rápido y único. 
                Mira tus calificaciones en tiempo real.
            <br><br>
            Prueba el servicio 👇🏼
            </p>
            </div>
            <a href="../subscribe/" class="btn btn-primary">Adquirir este servicio 📚</a>
            <br><br>
            <div id="parrafo">
                <p>Lanzamiento del servicio 🤓</p>
            </div>
            <a href="../eddukate-school/" class="btn btn-primary" id="fecha"> 👩🏻‍🏫</a>
        </div>
        <div id="servicios-temas" style="background: #FDFC47;  /* fallback for old browsers */ background: -webkit-linear-gradient(to right, #24FE41, #FDFC47);  /* Chrome 10-25, Safari 5.1-6 */ background: linear-gradient(to right, #24FE41, #FDFC47); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
            <div class="img-services-1">
               
            </div>
        </div>
    <br><br>
    
    <div id="atencion" style="text-align: center; font-size:10px; color:grey;">
        <p>Este servicio solamente esta disponible temporalmente en <b>Panamá</b> y en las provincias selectivas.</p>
    </div>
    <br>
    <!-- Ad Podcast -->

    <?php include('../app/helpers/sponsor/podast_ad.php'); ?>

    <br><br><br>

    <!-- Footer  -->
    <?php include('../app/helpers/footer.php'); ?>

    <!-- JavaScript Libraries -->
        <script src="../public/js/countdown/count_2.js"></script>
        <script src="../public/lib/jquery/jquery.min.js"></script>
        <script src="../public/lib/jquery/jquery-migrate.min.js"></script>
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