<?php
header('Expires: Mon, 26 Jul 2003 05:00:00 GMT');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
header('Pragma: no-cache');
header('Cache-Control: must-revalidate');

//header de redirection a otra pagina.
$acceso_permitido = false;

//autenticación de usuario
header('WWW-Authenticate: Basic realm= "Acceso restringido"');


//Lectura de valores introducidos por el usuario
if (
    !isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] !=
    'user' || $_SERVER['PHP_AUTH_PW'] != 'open'

) {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Privado"');
    $acceso_permitido = true;
    die("Se require autorizacion");
} else {
    echo "chales";
}

if ($acceso_permitido) {
    header('Location: http://www.uv.es/error.html');
    exit;
}
?>
<html>

<head>
    <title>Información reservada</title>
</head>

<body>....