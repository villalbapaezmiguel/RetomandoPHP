<?php
//este es el archivo empleado
require_once "Usuario.php";

class Empleado extends Usuario {

    private $salario ;
    private $legajo;
    private $id;

    public function __construct($nombreUsuario , $contrasenia, $salario , $legajo , $id)
    {
        parent :: __construct($nombreUsuario , $contrasenia); 

        $this->$salario = $salario;
        $this->$legajo = $legajo;
        $this->$id = $id;
    }

    public function mostrar()
    {
        echo ( parent :: Saludar() . " y soy un empleado");
    }



}







?>