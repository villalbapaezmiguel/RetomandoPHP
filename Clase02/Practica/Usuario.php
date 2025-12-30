<?php

class Usuario {

    private $nombreUsuario;
    private $contrasenia;

    function __construct($nombreUsuario , $contrasenia)
    {
        $this->$nombreUsuario = $nombreUsuario;
        $this->$contrasenia = $contrasenia;
    }

    public function Saludar()
    {
        echo ("<br/> Hola me llamo ". $this->$nombreUsuario);
    }


}









echo ("Holaa Usuario");
?>