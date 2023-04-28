<html>

<head>
    <title>CRUD</title>

</head>

<body>
    <h1>Consulta base de datos registro ventas</h1>
    <button type="button" onclick="window.location.href='formadd.php'">Agregar datos</button>
    <?php
    include('conexion.php');
    $con = conectar();
    $sql = "SELECT * FROM ventas";
    $resultado = mysqli_query($con, $sql);
    $campos = mysqli_num_fields($resultado);
    $filas = mysqli_num_rows($resultado);
    echo "<p>Cantidad de filas: $filas</p>\n";
    echo "<table border='1' cellspacing='0'>\n"; //Empezar tabla
    echo "<tr>"; //Crear fila
    while ($campo = mysqli_fetch_field($resultado)) {
        echo "<th>" . $campo->name . "</th>";
    }
    echo "</tr>\n"; //Cerrar fila
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>"; //Crear fila
        foreach ($row as $value) {
            echo "<td>" . $value . "&nbsp;</td>";
        }
        //botones
        echo "<td><button><a href=formupd.php?id=" . $row['id_pedido'] . ">Actualizar</a></button></td>";
        echo "<td><button><a href=delete.php?id=" . $row['id_pedido'] . ">Eliminar</a></button></td>";

        echo "</tr>\n"; //Cerrar fila
    }
    echo "</table>\n"; //Cerrar tabla
    mysqli_close($con);
    ?>

</body>

</html>