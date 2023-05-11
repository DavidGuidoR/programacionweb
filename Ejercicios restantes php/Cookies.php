<?php
$usuario = 'Juan';
SetCookie('usuario', 'Juan'); // volátil.
SetCookie('usuario', 'Juan', mktime(12, 0, 0, 22, 11, 2003)); //persistente

//actualizar el valor de una cookie
SetCookie('usuario', 'Pepe');

//modificar parametros de la cookie
SetCookie("usuario", "Juan", time() + 86400, "uv.es");

//Borrar una cookie
/*
SetCookie('usuario', '');
SetCookie('usuario', '', mktime(12, 0, 0, 22, 11, 1970));
*/

//leer cookie
print("Bienvenido $usuario<br>");

//acceso a cookies del usuario desde http global
print("Bienvenido {$_COOKIE['usuario']}<br>");

//cookies como array
SetCookie('datos[0]', 'Juan');
SetCookie('datos[1]', 'Sánchez Moreno');
SetCookie('datos[2]', '30');
isset($_COOKIE['datos']);
//leer array de cookies
echo "<br>Impresion de arreglo de cookies--------------------------------------------------" . "<br><br>";
print('Bienvenido. Tus datos son:<br>');
for (
    $i = 0;
    $i < count($_COOKIE['datos']);
    $i++
)
    print("{$_COOKIE['datos'][$i]}<br>");
