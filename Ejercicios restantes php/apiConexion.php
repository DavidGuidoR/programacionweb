<?php

//Conexion a base de datos mediante los parametros "direccionm bd","usuario","contraseña"
$id_enlace = mysqli_connect('localhost', 'root',  '');
if (!$id_enlace)
    die('No se pudo conectar');
print('Conexión realizada');
//mysqli_close($id_enlace);
