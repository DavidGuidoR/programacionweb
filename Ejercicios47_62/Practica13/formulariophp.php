<?php
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//guardado opciones seleccionadas en arreglos
$opciones = $_POST['opciones'];

echo "La persona de nombre {$nombre} tiene un ingreso anual de {$opciones}" . "<br>";

if ($opciones == "mas de 3000") {
    echo "Debido a que el ingreso de la persona supera los 3000 anuales debe pagar impuestos";
}
