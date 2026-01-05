<?php
/**Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
pertenece a algún elemento del listado.
0 en caso contrario.
 * 
 */



//creamos una funcion que reciba como parametro un string (palabra) y un entero (max)
function validar($palabra , $max)
{
    $listado = ["Recuperatorio","Parcial", "Programacion"];
    $retorno = 0;
    //esta condicion va a validar si la palabra que se ingreso como parametro no supere al entero(max)
    if(strlen($palabra) <= $max)
    {
        //tambien tiene que estar dentro del listado de palabras
        foreach($listado as $valor)
        {
            if(strcmp($valor , $palabra) === 0)
            {
                $retorno = 1;
                break ;
            }
        }

    }else{
        $retorno = 0;//en caso de que la palabra supero al entero
    }
    return $retorno;
}

$palabra = "programacion";

echo validar($palabra, 12) ;



?>