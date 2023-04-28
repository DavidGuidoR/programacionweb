<?php

include("conexion.php");
$con = conectar();

$id_pedido = $_GET['id'];
echo $id_pedido;
$sql = "DELETE FROM ventas WHERE id_pedido='$id_pedido'";
$query = mysqli_query($con, $sql);

if ($query) {
    echo "Registro eliminado con exito";
    header("Location: inde.php");
} else {
    echo "Hubo un problema al eliminar el registro";
}
