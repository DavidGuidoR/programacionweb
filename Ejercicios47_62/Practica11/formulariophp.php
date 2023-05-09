<?php
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//guardado opción seleccionada
$escolaridad = $_POST['opciones'];

echo "La persona de nombre {$nombre} cuenta con la escolaridad {$escolaridad}";
