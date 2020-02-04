<?php include('../../../app/helpers/header/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title_live; ?></title>
     <!-- Favicons -->
     <link href="../../../public/favicon.png" rel="icon">
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
    
  <!-- Nav Black -->
  <?php include('../../../app/helpers/nav/nav_black.php') ?>

      <br><br><br><br>
      <section id="video-livestream">
            <div class="chat-stream" style="background: #22303a;">
                <div class="chat-title">
                    <h1>Chat en vivo</h1>
                    <hr>
                </div>
                <div class="write-chat">
                </div>
                </div>
            
        <div class="video-stream">
            <!-- Video en Youtube
             <iframe width="820" height="480" src="https://www.youtube.com/embed/cIrDqBSUrYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             -->
              <!-- Source Video -->
            <video controls height="480" width="820">
                <source src="test.mp4" type="video/mp4">
            </video>
           
       </div>
       <br>
        <div class="description-live">
            <h1 style="color: white; font-size: 20px;"> <!-- <span>En vivo</span>--> Eddukate Taller: Mi primera pagina web</h1>
        </div>
      </section>
      
</body>
</html>