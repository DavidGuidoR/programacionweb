<?php

function conectar()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "registroventas";

    // Create connection
    $con = mysqli_connect($server, $username, $password);
    mysqli_select_db($con, $db);
    if (!$con) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $con;
}
