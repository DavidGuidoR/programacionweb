<?php
$claves = [
    'usuario1' => '2012',
    'usuario2' => '2013',
    'usuario3' => '2014',
    'usuario4' => '2015',
    'usuario5' => '2016'
];
$comprobaciones = in_array('usuario1', $claves);

echo $comprobaciones;
//almacenamiento variables ingresadas por el usuario
$nombre = $_POST['nombre'];
//guardado opciones seleccionadas en arreglos
$clave = $_POST['clave'];

function comprobacion($clave, $claves, $nombre)
{
    static $contador = 0;
    if (array_key_exists($nombre, $claves)) {
        if ($clave == $claves[$nombre]) {
            header("Location: acceso.php");
        } elseif ($contador >= 3) {
            echo "Excedió el numero de intentos fallidos";
        } else {
            echo "Las claves son distintas";
            $contador++;
        }
    } else {
        echo "El usuario no existe";
    }
}

comprobacion($clave, $claves, $nombre);

$comprobaciones = in_array('usuario1', $claves);

echo $comprobaciones;
