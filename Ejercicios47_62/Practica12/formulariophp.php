<?php
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//guardado opciónes seleccionadas en arreglos
$opciones = $_POST['opciones'];
//contar cantidad de deportes que practica
$cantdeportes = count($opciones);

echo "Los deportes que practica {$nombre} son:{$cantdeportes} " . "<br>";
foreach ($opciones as $opcion) {
    echo $opcion . "<br>";
}
