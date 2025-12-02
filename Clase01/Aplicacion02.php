<?php
/**Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. */

//estable la zona horaria de
date_default_timezone_set('America/Argentina/Buenos_Aires');
setlocale(LC_TIME, 'spanish');//para poder mostrar la fecha en español en windows

//Mostrar fecha actual 

$fechaActual = date("d-m-y");
echo("fecha actual : ". $fechaActual . "<br/>");

//MOstrar la fecha actual en distintos formatos
echo ("Distintos formatos de fecha : <br/>");

echo (date("y/m/d"). "<br/>");
echo (date("Y-m-d H:i:s"). "<br/>");
echo (strftime("%A, %d de %B de %Y") . "<br/>");


//Agregar que estacion del año es (podemos usa un  swchit)

//declaramos la variables que vamos a usar 
$mes ;
$dia ;

$mes = (int)date("m");
$dia = (int)date("d");

/**
 * Verano: inicia el 21 de diciembre y finaliza el 20 de marzo.
 * Otoño: inicia el 20 de marzo al 21 de junio.
 * Invierno: inicia el 21 de junio y finaliza el 22 de septiembre.
 * Primavera: inicia el 22 de septiembre al 21 de diciembre.
 */
switch($mes)
{
    case 1:
    case 2:
    case 3:
        if($dia >= 20 && $mes == 3)
        {
            echo ("Estamos en Otoño !!!");
        }else 
        {
            echo ("Estamos en Verano !!!");
        }
        break;
    case 4:
    case 5:
    case 6:
        if($dia >= 21)
        {
            echo("Estamos en Invierno !!!");
        }else if($dia < 21)
        {
            echo ("Estamos en Otoño !!!");
        }
        break;
    case 7:
    case 8:
    case 9:
        if($dia >= 22)
        {
            echo ("Estamos en Primavera !!!");
        }else if($dia < 22)
        {
            echo ("Estamos en Invierno !!!");
        }
        break;
    case 10:
    case 11:

    case 12:
        if($dia >= 21 )
        {
            echo ("Estamos en Verano !!!");
        }else if($dia < 21)
        {
            echo("Estamos en primavera!!!");
        }
}




 




















?>