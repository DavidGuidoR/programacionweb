<html>

<head>
    <title>Titulo</title>
    <?php
    // INCLUIR BIBLIOTECAS DE FUNCIONES\\
    require("$LIBDIR/CONECTA.PHP");
    require("$LIBDIR/FECHA.PHP");
    require("$LIBDIR/CADENA.PHP");
    require("$LIBDIR/GLOBALS.PHP");
    ?>
    <!-- Las variables van precedidas de $ -->
</head>

<body>

    <?php
    include("CABECERA.HTML")
    ?>

    <h1>Ejemplo simple</h1>
    Primer ejemplo de códico PHP embebido
    dentro de código HTML.<br>
    <?php
    echo 'Hola Mundo <br>';
    ?>

    <?php
    include("PIE.HTML")
    ?>
</body>

</html>