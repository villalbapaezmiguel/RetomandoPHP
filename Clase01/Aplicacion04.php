<?php
/**Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla. */


//declaramos la variable operador para que pueda almacenar los simbolos matematicos 
$operador = "-";
//definimos dos variables enteras 
$op1 = 10;
$op2 = 2;
//agregamos la variable resultado
$resultado = 0;
//logica del programa : dependiendo del simbolo que tenga la variable $operador , 
// se debera realizar la operacion y mostrar el resultado por pantalla.

switch($operador)
{
    case "+":
        $resultado = $op1 + $op2 ;
        echo("<br/> Operador + <br/>");
        echo("op1 = ". $op1 . " + op2 = ". $op2 . " = ". $resultado);
    break;
    case "-":
        $resultado = $op1 - $op2 ;
        echo("<br/> Operador - <br/>");
        echo("op1 = ". $op1 . " - op2 = ". $op2 . " = ". $resultado);
    break;
    case "/":
        $resultado = $op1 / $op2 ;
        echo("<br/> Operador / <br/>");
        echo("op1 = ". $op1 . " / op2 = ". $op2 . " = ". $resultado);        
    break;
    case "*":
        $resultado = $op1 * $op2 ;
        echo("<br/> Operador * <br/>");
        echo("op1 = ". $op1 . " * op2 = ". $op2 . " = ". $resultado);
        break;
    default :
        echo("Error con el operador...");
    break;
}





?>