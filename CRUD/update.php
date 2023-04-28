<?php

include('conexion.php');
$con = conectar();

$id_pedido = $_POST['id_pedido'];
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

$sql = "UPDATE ventas SET id_cliente='$id_cliente', zona='$zona', pais='$pais', tipo_de_producto='$tipo_de_producto', canal_de_venta='$canal_de_venta', prioridad='$prioridad',
    fecha_pedido='$fecha_pedido', fecha_envio='$fecha_envio', unidades='$unidades', precio='$precio', coste_unitario='$coste_unitario', importe_venta_total='$importe_venta_total',
    importe_coste_total='$importe_coste_total' WHERE id_pedido='$id_pedido'";

$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: inde.php");
}
