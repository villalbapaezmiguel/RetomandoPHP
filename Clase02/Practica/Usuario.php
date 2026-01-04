<?php
//este es el archivo usuario
class Usuario {

    private $nombreUsuario;
    private $contrasenia;

    function __construct($nombreUsuario , $contrasenia)
    {
        $this->nombreUsuario = $nombreUsuario;
        $this->contrasenia = $contrasenia;
    }

    
    public function getNombre()
    {
        $nombre = $this->nombreUsuario;
        return $nombre;
    }
    //Cuando usamos una funcion de la misma clase debemos usar $this->NombreDeLaFuncion() , de lo contrario dara error
    public function Saludar()
    {
        echo ("<br/> Hola me llamo " . $this->getNombre());
    }
}








?>