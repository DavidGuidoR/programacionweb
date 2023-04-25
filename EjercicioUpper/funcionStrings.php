<?
function funcionEjemplos()
{
    //definición de constantes
    define('pi', 3.14159);
    $a = pi;
    define('NOMBRE', 'Juan');
    print(NOMBRE);

    //comprobación variables definidas e impresión echo
    if (defined('NOMBRE')) echo "variable definida como: " . NOMBRE;

    //mayusculas y minusculas en variables
    $var = 3;
    $Var = 5.6;
    print("$var $Var");

    if ($a == 4)
        print('a vale 4');
    if ($a == 3)
        print("a vale 3");

    //No hay declaración de tipos. Son asignados por el  contexto.
    $var1 = 55.5;
    $var2 = 3;
    $var3 = substr(12345, 2, 2);
    var_dump($var1);
    var_dump($var2);
    var_dump($var3);
}


funcionEjemplos();
