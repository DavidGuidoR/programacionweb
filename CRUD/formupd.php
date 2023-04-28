<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM ventas WHERE id_pedido='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="id_pedido" value="<?php echo $row['id_pedido']  ?>">

            <input type="text" class="form-control mb-3" name="id_cliente" placeholder="ID CLIENTE" value="<?php echo $row['id_cliente']  ?>">
            <input type="text" class="form-control mb-3" name="zona" placeholder="Zona" value="<?php echo $row['zona']  ?>">
            <input type="text" class="form-control mb-3" name="pais" placeholder="Pais" value="<?php echo $row['pais']  ?>">
            <input type="text" class="form-control mb-3" name="tipo_de_producto" placeholder="Tipo de producto" value="<?php echo $row['tipo_de_producto']  ?>">
            <input type="text" class="form-control mb-3" name="canal_de_venta" placeholder="Canal de venta" value="<?php echo $row['canal_de_venta']  ?>">
            <input type="text" class="form-control mb-3" name="prioridad" placeholder="Prioridad" value="<?php echo $row['prioridad']  ?>">
            <input type="text" class="form-control mb-3" name="fecha_pedido" placeholder="Fecha de pedido" value="<?php echo $row['fecha_pedido']  ?>">
            <input type="text" class="form-control mb-3" name="fecha_envio" placeholder="Fecha de envio" value="<?php echo $row['fecha_envio']  ?>">
            <input type="number" class="form-control mb-3" name="unidades" placeholder="Unidades" value="<?php echo $row['unidades']  ?>">
            <input type="text" class="form-control mb-3" name="precio" placeholder="Precio Unitario" value="<?php echo $row['precio']  ?>">
            <input type="text" class="form-control mb-3" name="coste_unitario" placeholder="Coste unitario" value="<?php echo $row['coste_unitario']  ?>">
            <input type="text" class="form-control mb-3" name="importe_venta_total" placeholder="Importe venta total" value="<?php echo $row['importe_venta_total']  ?>">
            <input type="text" class="form-control mb-3" name="importe_coste_total" placeholder="Importe coste total" value="<?php echo $row['importe_coste_total']  ?>">


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>