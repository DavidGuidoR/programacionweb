<?php
session_start(); // Comienza la sesion, si es necesario.  
define('MAX_NUM_PAGINAS', 5);
?>

<html>

<head>
    <title> Prueba </title>
</head>

<body> El identificador de tu sesión es
    <?php print(session_id()); ?>
    <br>
    <?php
    if (!isset($_SESSION['usuario'])) {
        if (!isset($_POST['nombre'])) {
        }
    }


    // inicio formulario de comprobacion de sesiones

    // Si el usuario no ha enviado el formulario, mostrar el formulario
    if (!isset($_POST['nombre'])) {
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Introduce tu nombre: <input type="text" name="nombre">
            <input type="submit">
        </form>
    <?php
    } else {
        // Si el usuario ha enviado el formulario, establecer la variable de sesión 'usuario'
        $_SESSION['usuario'] = $_POST['nombre'];

        // Incrementar el contador de páginas visitadas
        if (isset($_SESSION['contador_paginas'])) {
            $_SESSION['contador_paginas']++;
        } else {
            $_SESSION['contador_paginas'] = 1;
        }

        // Mostrar el mensaje de bienvenida y el contador de páginas visitadas
        echo "Bienvenido " . $_SESSION['usuario'] . "<br>";
        echo "Has visitado " . $_SESSION['contador_paginas'] . " páginas a lo largo de la sesión.";
    }


    //Cierre de sesion si es mayor a 10

    if ($_SESSION['contador_paginas'] >= MAX_NUM_PAGINAS) {
        echo '<br><br>--------Destruyendo la sesión------<br>';
        session_destroy();
    }
    ?>