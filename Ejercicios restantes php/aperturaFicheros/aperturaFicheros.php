<?php
$todo = null;
$fp = fopen('datos.txt', 'r');
if (!$fp) die('Imposible abrir datos');
echo $fp . "<br>";
//die escribe el mensaje y finaliza el script.



//Lectura y escritura de ficheros
$val = fread($fp, 10);
echo "apertura con fred " . $val . "<br><br>";
//fwrite($fp, "Mas información");
$texto = fgets($fp, 20);
echo "apertura con gets: " . $texto . "<br><br>";
$un_car = fgetc($fp);
echo "apertura con fgetc: " . $un_car . "<br><br>";

//Reinicio puntero del archivo
rewind($fp);

//ciclo de impresión
while (!feof($fp))
    $todo .= fgetc($fp);
echo "apertura con ciclo: " . $todo . "<br><br>";
fclose($fp);
