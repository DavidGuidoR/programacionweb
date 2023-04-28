<?PHP
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM ventas";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <h1>Ingresar registro</h1>
    <form action="add.php" method="POST">
        <table>
            <tr>
                <td>Id cliente:</td>
                <td><input type="text" name="id_cliente"></td>
            </tr>
            <tr>
                <td> Zona:</td>
                <td><input type="text" name="zona"></td>
            </tr>
            <tr>
                <td> País:</td>
                <td><input type="text" name="pais"></td>
            </tr>
            <tr>
                <td> Tipo de producto:</td>
                <td><input type="text" name="tipo_de_producto"></td>
            </tr>
            <tr>
                <td> Canal de venta:</td>
                <td><select name="canal_de_venta">
                        <option>Offline</option>
                        <option>Online</option>
                </td>
            </tr>
            <tr>
                <td> Prioridad:</td>
                <td><input type="text" name="prioridad"></td>
            </tr>
            <tr>
                <td> Fecha pedido:</td>
                <td><input type="text" name="fecha_pedido"></td>
            </tr>
            <tr>
                <td> Fecha envió:</td>
                <td><input type="text" name="fecha_envio"></td>
            </tr>
            <tr>
                <td> Unidades:</td>
                <td><input type="number" name="unidades"></td>
            </tr>
            <tr>
                <td> Precio unitario:</td>
                <td><input type="text" name="precio"></td>
            </tr>
            <tr>
                <td> Coste unitario:</td>
                <td><input type="text" name="coste_unitario"></td>
            </tr>
            <tr>
                <td> Importe venta total:</td>
                <td><input type="text" name="importe_venta_total"></td>
            </tr>
            <tr>
                <td> Importe coste total:</td>
                <td><input type="text" name="importe_coste_total"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Introducir datos" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>