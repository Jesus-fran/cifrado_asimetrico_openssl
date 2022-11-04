<?php
// session_start();

// error_reporting(0);

// $var_cliente = $_SESSION['usuario'];
// $var_tel     = $_SESSION['tel'];
// $var_admin = $_SESSION['gerente'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="librerias/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>

    <title>Cifrado asimetrico</title>
</head>

<body class="">

    <!-- Barra de navegación -->



    <div class="container">
        <form method="POST" action="http://localhost/cifrado_asimetrico/models/cifrar_mensaje.php">
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control" name="duda" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" required></textarea>
                        <label for="floatingTextarea2">Mensaje</label>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col text-center">
                    <input type="submit" value="Enviar mensaje" class="btn btn-success" id="enviar_pregunta">
                </div>
            </div>
        </form>
        <br>
        <!-- <h6 class="text text-danger">Sus datos se mantendran de manera segurá de acuerdo a nuestro <a href="https://markethax.com/generador-aviso-de-privacidad/">aviso de privacidad</a></h6> -->


    </div>



</body>
<link rel="stylesheet" href="librerias/estilos/estilos.css">
</html>