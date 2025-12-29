<?php
/**Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach */



//declaromos el array y variables ;
$arrayNumerosImpares = array();
$impar;
$contador=0;
//cargamos 10 numeros impares al array 
while(count($arrayNumerosImpares) <= 10)
{
    $impar = rand(1,100);
    if(!($impar % 2 == 0))
    {
        array_push($arrayNumerosImpares, $impar);
    }
}
//imprimimos los numeros utulizando un for usando <br/>
for($i = 0; $i < count($arrayNumerosImpares) ; $i++)
{
    echo("<br/> elemento impar : ". $arrayNumerosImpares[$i]);
}
//imprimirlos nuevamente con la estructura while y foreach

echo("<br/>-----------------------------CON WHILE----------------------------------------<br/>");
while(count($arrayNumerosImpares) > $contador)
{
    echo("<br/> Elmemto : ".$arrayNumerosImpares[$contador]);
    $contador++;
}
echo("<br/>-----------------------------CON FOREACH----------------------------------------<br/>");
foreach($arrayNumerosImpares as $valor)
{
        echo("<br/> Elmemto : ". $valor);
}





















?>