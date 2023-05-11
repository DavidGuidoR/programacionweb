<?php
include "apiSeleccion.php";
//consulta a base de datos seleccionada
$busqueda = 'SELECT * FROM alumnos';
$id_query = mysqli_query($id_enlace, $busqueda);
if (!$id_query)
    die('Error en la búsqueda');

//Impresion de la consulta a la base de datos
while ($fila = mysqli_fetch_array($id_query))
    echo  "<br>" . $fila['nombre'] . ' ' . $fila['mail'] . "\n";

//extraccion consulta como objeto
while ($fila = mysqli_fetch_object($id_query))
    echo "<br>" . $fila->nombre . ' ' . $fila->mail . '\n';

//Ejemplo de otra consulta
echo "<br><br>" . "Consulta e impresiona  otra BD ---------------------------------------------------------------------------------" . "<br>";
if (!mysqli_connect('localhost', 'root', ''))  die('Error en la conexion');
if (!mysqli_select_db($id_enlace, 'phpfacil'))
    die('Error al seleccionar la BD');
$result = mysqli_query($id_enlace, 'SELECT * FROM cursos');
if ($result) {
?>
    <TABLE>
        <TR>
            <TH>Codigo</TH>
            <TH>Nombre curso</TH>
        </TR>
        <?php while ($a = mysqli_fetch_array($result)) { ?>
            <TR>
                <TD><?php echo $a['codigo']; ?></TD>
                <TD><?php echo $a['nombrecur']; ?></TD>
            </TR>
    </TABLE>
<?php    }
    } else print('<P>No hay datos'); ?>