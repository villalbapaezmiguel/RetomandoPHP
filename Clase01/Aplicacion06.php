<?php 
/**Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado */



//definimos el array de enteros
$arrayEnteros = array();

//le cargamos 5 enteros aleatorios con la funcion rand
while(count($arrayEnteros) < 5) 
{
    array_push($arrayEnteros, rand(1,10));
}

//declaramos las variables que vamos a usar (promedio, acumulador , cantidad)
$promedio;
$acumulador = 0;
$cantidad = 0;

//recorremos el array , sumamos la cantidad de elementos dentro del mismo y lo dividimos por su cantiadd (esto nos dara el promedio)
foreach($arrayEnteros as $valor)
{
    $acumulador += $valor;
    $cantidad ++;
}

$promedio = $acumulador / $cantidad;


mostrarValoresArray($arrayEnteros);
echo ("<br/> El promedio de los valores es : ". $promedio);

if($promedio > 6)
{
    echo("<br/> El promedio es Mayor a 6");    
}else if($promedio < 6)
{
    echo("<br/> El promedio es Menor a 6");
}else{
    echo("<br/> El promedio es igual a 6");
}







//Muestra los valores de los elementos del array 
function mostrarValoresArray($arrayEnteros)
{
    $indice = 0;
    foreach($arrayEnteros as $valor )
    {
        echo("<br/> array [".$indice."] = ".$valor);
        $indice++;
    }
}






























?>