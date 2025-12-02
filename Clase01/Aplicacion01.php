<?php

/**Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron. */

$acumulador = 0;//suma todos los numeros de del 1 al 1000 sin que supere los 1000mil
$contador = 0; //acumula la cantidad de veces que se itera en el bucle
$resultado = 0; //muestra el resultado final 

for($i = 1 ; $acumulador < 1000 ; $i ++)
{
    echo $acumulador. "+" . $i . "=";
    $acumulador = $acumulador + $i;
    if($acumulador < 1000)
    {
        echo $acumulador . "<br/>";
        $resultado = $acumulador;

    }else{
        echo "El numero excede los 1000";
        break;
    }
}

echo "<br/>Numeros sumados : ". $resultado . "<br/>";
echo "Cantidad de numeros sumados : ". $contador . "<br/>";









?>

