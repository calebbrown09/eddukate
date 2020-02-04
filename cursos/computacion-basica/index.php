<?php include('../../app/helpers/cursos/name_cursos/computacion_basica.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <title><?php echo "Curso de ". $titlo_curso_cb ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicons -->
    <link href="https://cdneddukate.000webhostapp.com/favicon-eddukate-new.png" rel="icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/styles.css">
    <!-- Bootstrap CSS File -->
    <link href="../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
     <!-- Header Nav -->
     <?php include('../../app/helpers/nav.php'); ?>
     <!-- / Header Nav --> 

     <section id="intro_curso" class="clearfix">
    <div class="container">
  <br><br>
      <div class="intro-img">
        <img src="http://localhost:8888/eddukate/public/background.png" style="border-radius: 5%" width="660" class="img-fluid">
      </div>

      <div class="intro-info">

          <!-- Titulo curso  --> 
        <h2>Curso de Computación básica</h2>

           <!-- Descripcion curso  --> 
        <label>¿Eres principiante y quieres tener las bases para manejar tu computadora de manera autónoma? Inicia en el mundo de la computación y aprende a instalar programas en Windows 10. Envía correos, gestiona tu seguridad e identifica las partes básica de una computadora.
          <p></p>
        Intégrate en el mundo de la informática desde lo mas <br> básico hasta lo mas avanzado. 
        </label>

         <!-- Nivel del curso  --> 
        <h1>Nivel</h1>
        <div class="level-curso">
          <div class="progress" style="width: 40%; height: 26px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Básico</div>
                  </div>
          </div>
          <br>
        <h1 style="font-size: 15px;">  Este curso forma parte de:
        <br>
      <span style="color: #ffba42"> <i class="fa fa-signal" aria-hidden="true"></i> Desarrollo personal</span></h1>
          <br>
        <!-- redirigir al curso --> 
        <div>
            <a href="clases/1.php" class="btn-get-started scrollto">Quiero Aprender</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Que aprendera -->
  <main id="main">
    <section id="countdown">
      <div class="countdown">
        <center>
          <br><br>
        <h3 style="font-size: 30px; font-weight: bold;">¿Que aprenderé en este curso?</h3>
      </center>
      </div>
      <br><br><br><br>
    </section>
</body>
</html>