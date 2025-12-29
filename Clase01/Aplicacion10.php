

<?php
/**Aplicación Nº 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays. */

require 'Aplicacion09.php';


//generar un array asociativo , que contengan tres arrays del punto anterior

$arrayAsociativo ["uno"] = $lapicera01;
$arrayAsociativo ["dos"] = $lapicera02;
$arrayAsociativo ["tres"] = $lapicera03;

echo("<br/><br/>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++");

//generar un array indexado , que contenan tres arrays del punto anterior

$arrayindexado [0] = $lapicera01;
$arrayindexado [1] = $lapicera02;
$arrayindexado [2] = $lapicera03;

//echo "<br/> array 01 :".$arrayindexado[0]["marca"];

//usamos las funciones de crear , cargar , mostrar
$nuevaLapicera =  crearLapicera();
cargarLapicera($nuevaLapicera,"verde","Miguelon","fino",250000);

//lo agregamos en el array asociativo :
$arrayAsociativo["cuatro"] = $nuevaLapicera;
//lo agregamos en el array indexado :
$arrayindexado [4] = $nuevaLapicera;


echo("<br/>-------------------------ARRAY ASOCIATIVO---------------------------");
mostrar($arrayAsociativo);
echo("<br/>-------------------------ARRAY INDEXADO---------------------------");
mostrar($arrayindexado);


































?>