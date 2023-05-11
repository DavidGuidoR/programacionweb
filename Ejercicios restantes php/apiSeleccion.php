<?php
include "apiConexion.php";

//Mediante select_db nos permite seleccionar una base de datos a utilizar y guardar la referencia en una variable
if (!mysqli_select_db($id_enlace, 'phpfacil'))
    die('No existe la BD');
