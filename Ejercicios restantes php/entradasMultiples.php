<form action="entradasMultiples.php" method="POST">
    <select multiple name="menu[]">
        <option>Tortilla </options>
        <option>Paella </options>
        <option>Fabada </options>
        <option>Lentejas </options>
    </select><input type=submit>
</form>
<?php
echo 'Platos seleccionados:<br>';
foreach ($_POST['menu'] as $plato) {
    echo "$plato<br>\n";
}
?>