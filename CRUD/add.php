<?php
include("conexion.php");
$con = conectar();

$id_cliente = $_POST['id_cliente'];
$zona = $_POST['zona'];
$pais = $_POST['pais'];
$tipo_de_producto = $_POST['tipo_de_producto'];
$canal_de_venta = $_POST['canal_de_venta'];
$prioridad = $_POST['prioridad'];
$fecha_pedido = $_POST['fecha_pedido'];
$fecha_envio = $_POST['fecha_envio'];
$unidades = $_POST['unidades'];
$precio = $_POST['precio'];
$coste_unitario = $_POST['coste_unitario'];
$importe_venta_total = $_POST['importe_venta_total'];
$importe_coste_total = $_POST['importe_coste_total'];

$sql = "INSERT INTO ventas (id_cliente, zona, pais, tipo_de_producto, canal_de_venta, prioridad, fecha_pedido, fecha_envio, unidades, precio,
        coste_unitario, importe_venta_total, importe_coste_total) VALUES ('$id_cliente','$zona','$pais','$tipo_de_producto','$canal_de_venta','$prioridad','$fecha_pedido','$fecha_envio',
        '$unidades','$precio','$coste_unitario','$importe_venta_total','$importe_coste_total')";
echo $sql;
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: inde.php");
} else {
}
