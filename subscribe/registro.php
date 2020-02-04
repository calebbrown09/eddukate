<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/styles.css">
    <link href="https://cdneddukate.000webhostapp.com/favicon-eddukate-new.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <title>Estas apunto de prepararte como un profesional.</title>
</head>

<body>
    <div id="text5">
        <img src="https://cdneddukate.000webhostapp.com/logo_page/eddukate-logo-web-blanco.png" width="150" alt="">
    </div>
    <div id="registro">
        <div id="text6">
            <h1>Empieza registrándote</h1>
        </div>
        <form role="form" name="registro" action="../app/process/process_form/register.php" method="post">
            <div id="form">
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre completo:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="fullnamehelp" placeholder="Nombre completo" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de usuario:</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="fullnamehelp" placeholder="Nombre de usuario" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronico:</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo electronico" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                </div>
        

    </div>
    <br>
    <div id="plan">
        <h1>Tu plan de pago</h1>
        <div id="plan-anual">
            <div id="plan-anual-price">
                <h3><small>$</small>150<span>USD</span></h3>
            </div>
            <h2>Plan Anual</h2>

        </div>
        <center>
            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlInline" required>
                <label class="custom-control-label" for="customControlInline">Acepto los <a href="">términos y condiciones</a></label>
            </div>
        </center>
    </div>
    <div id="buttom">
    <button type="submit" class="btn btn-primary btn-lg btn-block">Completar compra</button>
    </div>
    
    </form>
    <br>
    <script src="../app/process/valid/valid_register.js"></script>
</body>

</html>