<?php
 
 //hola soy un comentario
    echo("hola como estas ?");

    $nombre = "MIguel";
    $edad = 23;
    $sueldo = 2500000;

    print("Nombre :$nombre <br/>");
    echo "edad :", $edad ;
    printf("Sueldo : %f", $sueldo);

    echo "<br/>";



    if($edad > 20)
    {
        echo "Sos mayor a 20 años!!!";
    }else if( $edad < 10)
    {
        echo "Sos un niño todavia...";
    }


    switch($edad)
    {
        case 23:
            echo "Tenes 23 años";
        break;

        case 25:
            echo "Tenes 25 años";
        break;
        default: 
            echo "no tenes 23 y tampoco 25 años";
        

    }


    echo ("<br/>");
    for($i = 0 ; $i < 10 ; $i++ )
    {
        echo " i = ", $i , "<br/> ";
    }


    echo ("<br/>");

    $vector = array(1,2,3);
    
    foreach($vector as $valor)
    {
        //valor es un elemento de la coleccion
    }

    $vecClaveYValor = array("uno" => 1 , "dos" => 2, "tres" => 3);

    foreach($vecClaveYValor as $k => $valor )
    {
        //$k posee la clave y $valor el elemento
    }


    $condicionUno = true;
    $contadorCondicion = 0;

    while($condicionUno == true)
    {
        if($contadorCondicion > 5)
        {
            $condicionUno = false;
            break;
        }
        $contadorCondicion ++;
    }

    $condicionDos = true;

    do{

        $condicionDos =  false ;        

    }while($condicionDos == true);



    echo ("<br/>");
    echo ("Edades : ");


    $vectorEdades = array(23,25,40 , 18 ,32);

    foreach($vectorEdades as $valor)
    {
        echo $valor;
        
        echo ("<br/>");
    }
    
    
    funcionEdades($vectorEdades);
    echo "Funcion Sort (Ordena de manera ascendente) <br/>";

    sort($vectorEdades);
    foreach($vectorEdades as $key => $valor)
    {
        echo "VectorEdades = [". $key ."] = " . $valor ."<br/>";
    }

    echo "Funcion Sort (Ordena de manera descendente) <br/>";
    rsort($vectorEdades);
    mostrarClaveYValor($vectorEdades);


    echo "Funcion Ksort (Ordena un array asociativo de manera asendente por su clave) <br/>";
    ksort($vectorEdades);
    mostrarClaveYValor($vectorEdades);

    echo "Funcion arsort (Ordena un array asociativo de manera descendente por su valor) <br/>";
    arsort($vectorEdades);
    mostrarClaveYValor($vectorEdades);

    echo "Funcion Krsort (Ordena un array asociativo descendentemente,por su clave.) <br/>";
    krsort($vectorEdades);
    mostrarClaveYValor($vectorEdades);

















    //FUNCIONES 





    //Muestra la clave y valor del vector pasado por parametros
    //valida que sea un vector
    //return : 0 si salio todo bien , de lo contrario "Esto no es un vector";
    function mostrarClaveYValor($vector)
    {
        if(is_array($vector))
        {
            foreach($vector as $key => $valor)
            {
                echo "Vector = [". $key ."] = " . $valor ."<br/>";
            
            }            
            return 0;

        }else{
            echo "Esto no es un vector...";
        }        
    }









    //Muestra los valores del vector que se le haya pasado por parametros
    //valida que sea un vector
    //return : caso 0 = muetra el valor , de lo contrario "esto no es un vector"
    function funcionEdades ($vector)
    {
        if(is_array($vector))
        {
            foreach($vector as $valor)
            {
                echo $valor;
                
                echo ("<br/>");
            }
            return 0;
        }else{
            echo "Esto no es un vector...";
        }

    }
    













    //Arrays

    







?>














