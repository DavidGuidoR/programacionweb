<?php
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//conversion cadena a numero
$edad = intval($_POST['edad']);
var_dump($edad);
if ($edad >= 18 && $edad < 120) {
    echo "La persona de nombre {$nombre} es mayor o tiene 18 años";
} elseif ($edad > 120 or $edad < 0) {
    echo "Edad invalida";
} else {
    echo "la persona de nombre {$nombre} no es mayor de 18 años";
}
