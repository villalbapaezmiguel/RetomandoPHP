<?php
/**Aplicación Nº 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
 */


$numero = 33;
$cadena = strval($numero);

echo ("<br/> numero es tipo = " . gettype($numero));
echo ("<br/> cadena es tipo = " . gettype($cadena));
//strval convierte un tipo de dato escalar(dato fijo) a una cadena y retorna una cadena.

echo ("<br/>");
//declaramos las variables (agrgear variables de unidad y decena) + la variable que nos da el enuncido
$num = 50;
$unidad ;
$decena ;

$cadenaNum = strval($num);
//convertimos a string para poder sacar el primer digito de la variable num
$decena = (int)$cadenaNum[0];
//convertimos a string para poder sacar el segundo digito de la variable num
$unidad = (int)$cadenaNum[1];
//creamos un swicth con 5 case , para detectar que decena es .

/*******************Sacar decena/Unidad , otra forma******************* */
//decena = num / 10 (entera) y unidad = num % 10
//para no depender de la longitud/indice

switch ($decena) 
{
    case 2:
        if($unidad == 0)
        {
            echo("Veinte <br/>");
        }else{
            
            echo ("Veinti". convertirUnidadATexto($unidad). "<br/>");
        }
    break;
    case 3:
        if($unidad == 0)
        {
            echo("Treinta <br/>");
        }else{
            
            echo ("Treinta y ". convertirUnidadATexto($unidad). "<br/>");
        }
    break;
    case 4:
        if($unidad == 0)
        {
            echo("Cuerenta <br/>");
        }else{
            echo ("Cuarenta y ". convertirUnidadATexto($unidad). "<br/>");
        }
    break;
    case 5:
        if($unidad == 0 )
        {
            echo("Cincuenta <br/>");
        }else{
            echo ("Cincuenta y ". convertirUnidadATexto($unidad). "<br/>");

        }
    break;
    case 6:
        if($unidad == 0)
        {
            echo("Sesenta <br/>");
        }else{
            echo("el rando es entre 20 y 60... <br/>");
        }
    break;
    default :
        echo ("Error , el numero ingresado no se encuentra entre 20 y 60");
        break;
}
//creamos una funcion que dectecte que unidad es para usarlo en los case que dectectan la decena .

//devuelve que unidad se le paso por parametros de manera de formato de texto
//parametros ($Unidad)
//return : un formato de texto , de lo contrario -1

function convertirUnidadATexto ($unidad)
{
    $textoUnidad = "";
    if(is_int($unidad))
    {
        switch($unidad)
        {
            case 1 :
                $textoUnidad = "uno";
            break;
            case 2 :
                $textoUnidad = "dos";
            break;
            case 3 :
                $textoUnidad = "tres";
            break;
            case 4 :
                $textoUnidad = "cuatro";
            break;
            case 5 :
                $textoUnidad = "cinco";
            break;
            case 6 :
                $textoUnidad = "seis";
            break;
            case 7 :
                $textoUnidad = "siete";
            break;
            case 8 :
                $textoUnidad = "ocho";
            break;
            case 9 :
                $textoUnidad = "nueve";
            break;
        }
    }else {
        return -1;
    }

    return $textoUnidad;
}














?>