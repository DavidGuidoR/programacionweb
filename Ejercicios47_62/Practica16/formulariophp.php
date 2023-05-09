<?php
$archivo = "datos.txt";
// Recuperar los valores de los campos
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];

// Verificar la cantidad de cada pizza seleccionada
$cantidad_jamon = $_POST["cantidad_jamon"];
$cantidad_napolitana = $_POST["cantidad_napolitana"];
$cantidad_mozzarella = $_POST["cantidad_mozzarella"];

// Escribir el pedido en el archivo
$ar = fopen($archivo, "a") or die("Problemas de guardado");
fputs($ar, $nombre . "\n");
fputs($ar, $direccion . "\n");

if (isset($_POST["pizza1"])) {
    $pizza1 = $_POST["pizza1"];
    $cantidad_jamon = $_POST["cantidad_jamon"];
    fputs($ar, $pizza1 . "\n");
    fputs($ar, $cantidad_jamon . "\n");
}

if (isset($_POST["pizza2"])) {
    $pizza2 = $_POST["pizza2"];
    $cantidad_napolitana = $_POST["cantidad_napolitana"];
    fputs($ar, $pizza2 . "\n");
    fputs($ar, $cantidad_napolitana . "\n");
}

if (isset($_POST["pizza3"])) {
    $pizza3 = $_POST["pizza3"];
    $cantidad_mozarrella = $_POST["cantidad_mozzarella"];
    fputs($ar, $pizza3 . "\n");
    fputs($ar, $cantidad_mozarrella . "\n");
}

fputs($ar, "--------------------------------------------------------" . "\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";
