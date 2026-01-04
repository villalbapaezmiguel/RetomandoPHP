<?php
//este es el main
require_once "Usuario.php";
require_once "Empleado.php";

//$nombreUsuario , $contrasenia, $salario , $legajo , $id

$empleado = new Empleado("Miguel",12345, 2500000, 7736,179);

$empleado->mostrar();



?>