<?php
//incluir codigo  o funciones de otros archivos
require('fichero0.php');
if ($incluir == TRUE) {
    for ($i = 1; $i < 4; $i++) {
        include('fichero' . $i . '.php');
    }
}
//impresion de funcion externa fichero0
pruebafunction();
