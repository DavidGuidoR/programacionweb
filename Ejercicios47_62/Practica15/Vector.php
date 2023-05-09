<?php
$diassemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
print_r($diassemana);
$primer = reset($diassemana);
$ultimo = end($diassemana);

echo "<br>" . "El primer elemento del arreglo es {$primer}, y el ultimo es {$ultimo}";
