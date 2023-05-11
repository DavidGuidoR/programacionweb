<?php
$cont = 0;
$fp = fopen('contador.dat', 'r+');
$cont = fread($fp, 20);
$cont++;
print("Eres el visitante número {$cont}");
rewind($fp);
fwrite($fp, $cont);
fclose($fp);
