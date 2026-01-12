<?php
class Auto{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha; //el ? es porque permite un null en ese dato

    public function __construct($_marca , $_color , $_precio = 0 , $_fecha = null)
    {
        
        $this->_marca = $_marca;
        $this->_color = $_color;
        $this->_precio = $_precio;
        $this->_fecha = $_fecha;

    }


    public function getMarca()
    {
        $marca = $this->_marca;
        return $marca;
    }

    
    public function getColor()
    {
        $color = $this->_color;
        return $color;
    }

    
    public function getFecha()
    {
        $fecha = $this->_fecha;
        return $fecha;
    }

    public function getPrecio()
    {
        $precio = $this->_precio;
        return $precio;
    }

    public function setFecha($nuevaFecha)
    {
        $this->_fecha = $nuevaFecha;
        if($this->_fecha == $nuevaFecha)
        {
            return 1;
        }else{
            return -1;
        }
    }
    
    public function setColor($nuevo)
    {
        $this->_color = $nuevo;
        if(strcmp($this->_color , $nuevo) === 0)
        {
            return 1;
        }else{
            return -1;
        }
    }
    
    public function setMarca($nueva)
    {
        $this->$_marca = $nueva;
        if(strcmp($this->$_marca , $nueva) === 0)
        {
            return 1;
        }else{
            return -1;
        }
    }

    public function setPrecio($precio)
    {
        $this->$_precio = $precio;
        if($this->$_precio == $precio)
        {
            return 1;
        }else{
            return -1;
        }
    }


    
    public function AgregarImpuestos($param1 , $param2)
    {

    }
    //Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    //por parámetro y que mostrará todos los atributos de dicho objeto.
    public static function MostrarAuto(Auto $objeto)
    {

        $mensaje = "Marca : " . $objeto->getMarca() . "<br/>" . "Color :" . $objeto->getColor() . "<br/>" 
        . "Fecha : ". $objeto->getFecha() . "<br/>" . "Precio :". $objeto->getPrecio() . "<br/>" ;

        return $mensaje;
    }












}






?>