<?php

$duda = $_POST['duda'];
// Aqui todo el proceso de encriptacion
// Se lee la llave privada que se encuentra en el servidor
$llave_priv = file_get_contents("llaves/llave_privada.txt");
if (!$llave_priv) {
    echo "No hay una llave publica debes <a href=\"http://localhost/cifrado_asimetrico/\">Generar</a> una";
}
// Convirte el string a una llave para ser usada
$llave_priv = openssl_pkey_get_private($llave_priv);

// Se crea la llave publica a partir de la llave privada
$pubKey = openssl_pkey_get_details($llave_priv);

// Se extrae la llave publica unicamente
$pubKey = $pubKey["key"];

// Encripta el mensaje
openssl_public_encrypt($duda, $duda_encript, $pubKey);
$duda_encript = base64_encode($duda_encript);
// echo $duda_encript;
header("Location:../ver_mensaje.php?mensaje=".urlencode($duda_encript));
