<HTML>

<HEAD>
    <TITLE>Acceso a directorios</TITLE>
</HEAD>

<BODY>
    <h1> Contenido del directorio /pruebas</h1>
    <?php
    $directorio = 'dir';
    $ref = opendir($directorio);
    rewinddir($ref);
    while ($fichero = readdir($ref)) {
        if ($fichero != '.' and $fichero != '..') {
            if (is_dir($fichero))
                $fichero .= '/';
            printf("$fichero<br>");
        }
    }
    closedir($ref);
    ?>
</BODY>

</HTML>