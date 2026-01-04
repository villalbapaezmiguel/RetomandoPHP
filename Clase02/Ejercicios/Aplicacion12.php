<?php
/**Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
 */


// solo decribi lo que hace y como funciona
//creamos la funcion invertirArray y le pasamos como parametro un array 
//declaramos una variable $cadenaInvertida , que va contener la los caracteres invertidos del array
//recorremos el array con un bucle for de manera descendente y vamos guardando los caracteres del array en la variable $cadenaInvertida
//retornamos la variable $cadenaInvertida
function invertirArray($array)
{
    $cadenaInvertida = "";
    $mensaje = "resultado : ";
    if(!empty($array))
    {
        for($i = count($array)-1; $i >= 0 ; $i--)
        {
            $cadenaInvertida .= $array[$i];  
        }
    }else{
        return $mensaje . "Array vacio...";
    }

    return $mensaje . $cadenaInvertida;
}

$array = ["h","o","l","a"];
echo invertirArray($array);


?>