<?php

//funciones propias en php

//puenden recibir parametros y retornar
function NombreFuncion($param1 ,$param2 ,$param3)
{
    return 0;
}

//pueden tener valores por default
function NombreFuncion2($param1, $param2 = "default")
{

}


//CLASES Y OBEJETOS
//sintaxis


//Una instancia es un objeto creado a partir de una clase
class NombreClase {
    //atribtos (private-protected-public/var - static)
    private $atributo;

    //contructor
    public function __construct()
    {

    }



    //metodos (private-protected-public/var - static)
    private function NombreMetodo1($parametros){}
    public function NombreMetodo2($parametros){}
    static function NombreMetodo3($parametros){}
}




//declaracion del objeto

//instanciamos el objeto 
$nuevoObjeto = new NombreClase();


//Diferencia entre instancia y miembro static :

    //la instancia es la creacion del objeto que parte del molde de una clase :

    //clase 
    class Auto{

        public $color;
    }

    //intancia de la clase : accedemos a los miembros de la instancia con el operador ->
    $auto1 = new Auto();
    $auto1->color = "Azul";
    
    $auto2 = new Auto();
    $auto2->color = "Rojo";

    echo ("<br/> ". $auto1->color);
    echo ("<br/> ". $auto2->color);
    //Una instancia es independiente a otras instancias 


    //miembro estatico
    class Casa{
        public static $color = "Verde";
    }

    //cuando hablamos de un miembro static , nos referimos a un atributo o metodo que ya esta definido y se va a encontrar
    //en todas las instancias definidas .

    $casa1 = new Casa();
    $casa2 = new Casa();

    //accedemos al miembro con el operador ::
    echo("<br/> casa1 : ". $casa1::$color);
    echo("<br/> casa2 : ". $casa2::$color);

    //si modificamos el valor de dicho atributo se modifica en todos

    $casa1::$color = "Morado";

    echo("<br/> casa2 : ". $casa2::$color);
    //modificamos el miembro statico de una clase independiente y se modifico en todos .



    //THIS , es la instancia para acceder a los miembros de una instancia 

    class Persona{
        public function __construct($nombre , $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function Mostrar()
        {
            echo("<br/>---------------------------");
            echo ("<br/> Nombre : ". $this->nombre);
            echo ("<br/> Edad : ". $this->edad);
            echo("<br/>---------------------------");
        } 
    }

    $persona1 = new Persona("Miguel", 24);
    $persona1->Mostrar();



?>