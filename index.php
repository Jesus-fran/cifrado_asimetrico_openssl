<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="librerias/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
    <script src="librerias/jquery-3.6.0.min.js"></script>
    <script src="controllers/control.js"></script>

    <title>Cifrado asimetrico</title>
</head>

<body class="">


    <br><br>
    <div class="container">
        <h4 class="text-center">Creación de llaves</h4>
        <br><br><br>
        <div class="row align-items-center">
            <div class="col text-center">
                <button type="button" class="btn btn-secondary" onclick="crear_llave_privada()">Crear llave publica y privada</button>
                <br><br>
                <p class="text-danger">IMPORTANTE:</p>
                <p>Guarde su llave privada para descifrar los mensajes</p>
                <br><br><br>
                <a href="http://localhost/cifrado_asimetrico/enviar_mensaje.php">Escribir Mensaje</a>
            </div>
        </div>
        <br>


    </div>

</body>
<link rel="stylesheet" href="librerias/estilos/estilos.css">

</html>