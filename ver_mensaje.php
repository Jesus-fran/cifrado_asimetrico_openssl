
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

    <!-- Barra de navegación -->

    <!-- contenido -->
    <div class="container">
        <br><br>
        <h4 class="text-center">Mensaje del usuario</h4>
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label for="formFile" class="form-label">Eliga su archivo de llave privada</label>
                    <input class="form-control" type="file" id="file_llave" onblur="detect_file()">
                    <br>
                    <p class="fst-italic" id="text_file"></p>
                    <br>
                    <br>
                    <br>
                    <a href="http://localhost/cifrado_asimetrico/">Cambiar clave</a><br><br><br>
                    <a href="http://localhost/cifrado_asimetrico/enviar_mensaje.php">Escribir mensaje</a>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
               
                <div class="card">
                    
                        <h5 class="card-header">Encriptado</h5>
                        <div class="card-body">
                            <div class="container">

                            <?php 
                            

                            echo "<div id=\"mensaje_encriptado\">".$_GET['mensaje']."</div>";
                            
                            
                            ?>
                            </div>
                                
                            
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
               
                <div class="card">
                    
                        <h5 class="card-header">Desencriptado</h5>
                        <div class="card-body">
                            <div class="container">

                            <div id="div_mensaje"></div>
                                
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 offset-md-4">
                                        <?php
                                        echo "<input type=\"button\" value=\"Desencriptar\" class=\"btn btn-success\" onclick=\"descifrar_mens()\">";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- Aqui comienza el Footer -->

</body>
<link rel="stylesheet" href="librerias/estilos/estilos.css">

</html>