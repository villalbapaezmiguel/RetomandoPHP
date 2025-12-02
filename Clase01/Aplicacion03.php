<?php
/**Aplicación No 3 (Obtener el valor del medio)
    Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
    el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
    variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
    = 6; $b = 9; $c = 8; => se muestra 8.
    Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
 * 
 */


    //declaramos las variables que vamos a usar
$a = 16;
$b = 9;
$c = 88;

    if(($a > $b && $a < $c) || ($a < $b && $a > $c))
    {
        echo("A = ".$a. "; B = ".$b. "; C = ".$c. " => ".$a);
        echo("<br/>A es el del medio");
    }else if(($b > $a && $b < $c) || ($b < $a && $b > $c))
    {
        echo("A = ".$a. "; B = ".$b. "; C = ".$c. " => ".$b);
        echo("<br/>B es el del medio");
    }else if(($c > $a && $c < $b) || ( $c < $a && $c > $b))
    {
        echo("A = ".$a. "; B = ".$b. "; C = ".$c. " => ".$c);
        echo("<br/>C es el del medio");
    }else {
        echo("No hay valor del medio");
    }








?>