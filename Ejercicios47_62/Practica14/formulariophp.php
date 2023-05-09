<?php
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//guardado opciones seleccionadas en arreglos
$contrato = $_POST['contrato'];

echo "El contrato del empleado {$nombre} es el siguiente: " . "<br><br>";

echo $contrato;
