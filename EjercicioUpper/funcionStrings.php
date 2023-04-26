<?php
$numero = 5;
$numero1 = 6;
$referencia = 14;

function funcionEjemplo(&$referencia)
{
    //variables globales
    global $numero;
    $numero = 4;
    $GLOBALS['numero1'] = 8;
    echo "numero impreso: {$numero}<br>";
    global $numero1;
    echo "numero 1 impreso: {$numero1}<br>";
    $numero2 = 5;
    echo "numero 2 impreso: {$numero2}<br>";

    //referencia
    echo "impresión referencia: {$referencia}<br>";

    //concatenación
    $nombre = "Francisco";
    $apellidos = 'Tomas Vert';
    $nombre_completo = "concatenación de variables: " . $nombre . ' ' . $apellidos;
    echo $nombre_completo . "<br>";

    //manejo de cadenas
    $cadena1 = "CAdena";
    $cadena2 = "cadena";

    if (strcmp($cadena1, $cadena2)) {
        echo "las cadenas no son iguales diferencia de mayúsculas<br>";
    } else {
        echo "las cadenas son iguales<br>";
    };

    if (strcasecmp($cadena1, $cadena2)) {
        echo "las cadenas no son iguales<br>";
    } else {
        echo "las cadenas son iguales a pesar de las mayúsculas<br>";
    };

    $longitud = strlen($cadena1);
    echo "La longitud de la cadena es {$longitud}<br>";

    print(substr('Valencia', 0, 2) . "-" . substr('Valencia', 2, 3) . '-' . substr('Valencia', -3) . "<br>");

    $a = strstr('Valencia', 'en'); // $a = "encia";
    $b = strstr('Valencia', 'al'); // $b = alencia;
    $c = strstr('Valencia', 'val'); //$c = false;
    $d = strpos("Valencia", "en"); // $a = 3;


    echo "Valencia después de en es: {$a}<br>";
    echo "Valencia después de al es: {$b}<br>";
    echo "en dentro de Valencia se encuentra en la posición: {$d}<br>";

    //limpiar una cadena de espacios
    $esp = trim('	Valencia	'); // $esp = "Valencia";
    echo "V  alencia   sin espacios es: {$esp}<br>";

    //mayúsculas y minúsculas
    $minus = strtolower('Valencia'); // $a = 'valencia';
    echo "Valencia en minúsculas: " . $minus . "<br>";
    $mayus = strtoupper('Valencia'); // $a = 'VALENCIA';
    echo "Valencia en mayúsculas: " . $mayus . "<br>";

    //arreglos
    $vec[0] = '1º elemento';
    $vec[8] = '2º elemento';
    $vec['tercero'] = '3º elemento';
    $vec[5] = '4º elemento';
    $vec[1000] = 5.0;
    $vec[2] = '3º elemento';
    $vec[1] = "2º elemento";
    $vec[] = 'elemento push'; //$vec[6]= "3º elem..
    print_r($vec);
    echo "<br>";

    $vec1 = array(2 => 3, 9, 2.4, 'nombre' => 'Juan');
    print_r($vec1);
    echo "<br>";

    //eliminar del array
    //Para eliminar un elemento del array hay que emplear unset()
    unset($vec1['nombre']);
    print_r($vec1);
    echo "<br>";

    //arrays en arrays
    $ciudades = array(
        'España' => array('Madrid',  "Valencia", 'Barcelona'),
        'Italia' => array('Roma',  'Milan', "Venecia"),
        'Portugal' => array('Lisboa',  'Oporto')
    );
    print($ciudades['Italia'][2] . ' y ' . $ciudades['Portugal'][0]);
    echo "<br>";
    print_r($ciudades);
    echo "<br>";

    //contar array
    $v = array(3, 9, 2.4, 'Juan');
    for ($i = 0; $i < count($v); $i++)
        print("<br>v[$i]= " . $v[$i]);
    echo "<br>";

    //recorrer array
    $v1 = array(8 => 3, 9, 1 => 2.4, 'nombre' => 'Juan');
    foreach ($v1 as $i => $valor)
        print("<br>v1[$i]=$valor");
    echo "<br>";
}

function RecorreTodos(&$vec)
{
    $actual = current($vec);
    if ($actual) print("$actual<br>");
    while ($actual = next($vec))  print("$actual<br>");
}

/*Se puede recorrer el array en orden inverso.
prev (array)
Retrocede	el puntero hasta el anterior elemento, y devuelve el  contenido éste.
end (array)
Posiciona el puntero en el último elemento, y devuelve su valor.*/
function RecorreTodosInv($v)
{
    $actual = end($v);
    if ($actual) print("$actual<br>");
    while ($actual = prev($v))  print("$actual<br>");
}

/*El índice del elemento al que apunta el puntero puede ser  extraído con la función key().*/
function RecorreTodosKey($v)
{
    if ($actual = reset($v))
        printf("ind:%d, valor:%d<br>", key($v), $actual);
    while ($actual = next($v))
        printf("ind:%d, valor:%d<br>", key($v), $actual);
}

/*La función each() devuelve un vector con el índice y el  valor del elemento al que señala el puntero.	A  continuación avanza el puntero. eliminada en php8
function RecorreTodosEach($v) {
reset($v);
while ($celda = each($v))  print("indice:$celda[0],valor:$celda[1]<br>");
}*/

function pruebaestatica()
{
    //variables estáticas
    static $estatica = 6;
    $estatica++;
    echo "variable estatica: {$estatica}<br>";
}
funcionEjemplo($referencia);
echo "separación con segunda funcion-------------------------<br>";

$v2 = array(3, 9, 2.4, 'Juan');
echo "Recorrer array inverso<br>";
RecorreTodosInv($v2);
echo "Recorrer array<br>";
RecorreTodos($v2);
echo "Recorrer array con keys<br>";
RecorreTodosKey($v2);
pruebaestatica();
pruebaestatica();
