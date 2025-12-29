<?php
/**Aplicación Nº 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras */


$lapicera01 = crearLapicera();
$lapicera02 = crearLapicera();
$lapicera03 = crearLapicera();


cargarLapicera($lapicera01, "Negro","Faber Castell", "fino", 1500);
cargarLapicera($lapicera02, "Azul","Micro", "fino", 2000);
cargarLapicera($lapicera03, "Azul","Lamy", "grueso", 800);
mostrarLapicera($lapicera01);
mostrarLapicera($lapicera02);
mostrarLapicera($lapicera03);




//crea un array asociativo y lo retorna
function crearLapicera()
{
    $lapicera = [
    "color" => "",
    "marca" => "",
    "trazo" => "",
    "precio" => ""
    ];
    return  $lapicera; 
}

//carga los valores del array asociativos con las variables que estan como parametros
//usamos &$lapicera como refencia 
function cargarLapicera(&$lapicera, $color, $marca, $trazo , $precio)
{
    $lapicera["color"] = $color;
    $lapicera["marca"] = $marca;
    $lapicera["trazo"] = $trazo;
    $lapicera["precio"] = $precio;
    
}


//muestra los valores del array asociativo y lo muestra por pantalla
function mostrarLapicera(&$lapicera)
{
    echo("<br/>-----------------------------LAPICERA ".$lapicera["marca"]."----------------------------------<br/>");
    foreach ($lapicera as $key => $value) {
        
        echo("<br/> [".$key."] => [". $value."]" );
    }
}


function mostrar(&$arrayAsociativo)
{
    foreach ($arrayAsociativo as $clavePrincipal => $valorPrincipal) {
        
        foreach($valorPrincipal as $claveSecundaria => $valorSecundario){

            echo ("<br/> [".$clavePrincipal."] [".$claveSecundaria."] = [".$valorSecundario."]" );
        }
        
    }
}


?>