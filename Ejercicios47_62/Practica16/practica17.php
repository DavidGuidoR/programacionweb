<html>

<head>
    <title>lectura</title>
</head>

<body>
    <?php
    echo "Pedidos realizados" . "<br><br>";
    $ar = fopen("datos.txt", "r") or
        die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);
    ?>
</body>

</html>