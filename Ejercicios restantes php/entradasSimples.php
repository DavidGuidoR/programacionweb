<!-- formulario.html -->
<form action="entradasSimples.php" method="GET">
    Su nombre: <input type=text name=nombre><br> Su edad: <input type=text name=edad><br>
    <input type=submit>
</form>
<!-- accion.php -->
<?php
print("Hola $nombre<br>");
print("Tienes {$_GET['edad']} años<br>");
?>