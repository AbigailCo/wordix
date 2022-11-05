<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/*Mamani Ariel Maximiliano. LEGAJO 3607. Tec en desarrollo web. Github Ariel-Mamani */
/*Corrales Abigail Candelaria. LEGAJO 4251. Tec en desarrollo web. Github AbigailCo */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "AMIGOS","PERRO", "MADRE", "COSMO", "GATO"
    ];

    return ($coleccionPalabras);
}
//Modulo carga una coleccion de partidas en un arreglo indexado y asociativo
/**
 * @return array
 */
function cargarColeccionPartida (){
    //array $coleccionPartidas
    $coleccionPartidas[0] = ["palabraWordix "=> "QUESO" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix "=> "CASAS" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix "=> "PIANO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[3] = ["palabraWordix "=> "YUYOS" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[4] = ["palabraWordix "=> "TINTO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[5] = ["palabraWordix "=> "HUEVO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[6] = ["palabraWordix "=> "PISOS" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix "=> "FUEGO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[8] = ["palabraWordix "=> "GOTAS" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[9] = ["palabraWordix "=> "QUESO" , "jugador" => "majo", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[10] = ["palabraWordix "=> "CASAS" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[11] = ["palabraWordix "=> "NIÑOS" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
   return $coleccionPartidas;
}
//MODULO que retorna resumen del jugador dado el arreglo coleccion de partidas y el nombre deljugador
/**
 * genera el historial de juego del jugador
 * @param $arrayPartidas
 * @param $jugador
 * @return array
 */
function generaResumen($arrayPartidas,$jugador){
    //int $i, $numeroIntento, $numeroIntento1, $numeroIntento2, $numeroIntento3, $numeroIntento4, $numeroIntento5, $puntaje, $victoria, $partidas
    //string $nombre
    //array $resumenPartida
    $numeroIntento=0;
    $numeroIntento1=0;
    $numeroIntento2=0;
    $numeroIntento3=0;
    $numeroIntento4=0;
    $numeroIntento5=0;
    $contadorPartida=0;
    $puntaje=0;
    $victoria=0;
    $partidas=count($arrayPartidas);
    for($i=0;$i<$partidas;$i++){
        if($arrayPartidas[$i]["jugador"]==$jugador){
            $contadorPartida=$contadorPartida+1;
            switch($arrayPartidas[$i]["intentos"]){
                case 1:
                    $numeroIntento=$numeroIntento+1;
                    break;
                case 2:
                    $numeroIntento1=$numeroIntento1+1;
                    break;
                case 3:
                    $numeroIntento2=$numeroIntento2+1;
                    break;
                case 4:
                    $numeroIntento3=$numeroIntento3+1;
                    break;
                case 5:
                    $numeroIntento4=$numeroIntento4+1;
                    break;
                case 6:
                    $numeroIntento5=$numeroIntento5+1;
                    break;
            }
            $puntaje=$puntaje+$arrayPartidas[$i]["puntaje"];
            if($arrayPartidas[$i]["puntaje"]>0){
                $victoria=$victoria+1;
            }
        }
            /*if($arrayPartidas[$i]["intentos"]==1){   otra opcion para calcular los intentos
                $numeroIntento=$numeroIntento+1;
            }elseif($arrayPartidas[$i]["intentos"]==2){
                $numeroIntento1=$numeroIntento1+1;
            }elseif($arrayPartidas[$i]["intentos"]==3){
                $numeroIntento2=$numeroIntento2+1;
            }elseif($arrayPartidas[$i]["intentos"]==4){
                $numeroIntento3=$numeroIntento3+1;
            }elseif($arrayPartidas[$i]["intentos"]==5){
                $numeroIntento4=$numeroIntento4+1;
            }elseif($arrayPartidas[$i]["intentos"]==6){
                $numeroIntento5=$numeroIntento5+1;
            }
       */
}
$resumenPartida=["jugador"=>$jugador,"partida"=>$contadorPartida,"puntaje"=>$puntaje,
                    "victoria"=>$victoria,"intento1"=>$numeroIntento,"intento2"=>$numeroIntento1,
                    "intento3"=>$numeroIntento2,"intento4"=>$numeroIntento3,"intento5"=>$numeroIntento4,"intento6"=>$numeroIntento5];
return $resumenPartida;
}
//MODULO  carga los resumenes de las partidas(arreglo asociativo)
   



/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:
function seleccionarOpcion(){
     echo "          MENU PARA JUGAR WORDIX       \n";
    echo "1- Jugar al wordix con una palabra alegida \n";
    echo "2- Jugar al wordix con una palabra aleatoria \n";
    echo "3- Mostrar una partida \n";
    echo "4- Mostrar partida ganadora \n";
    echo "5- Mostrar resumen de jugador\n";
    echo "6- Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo "7- Agregar una palabra de 5 letras \n";
    echo "8- Salir \n";
    echo "\n INGRESE EL NUMERO DE LA OPCION.";
    $esOpcion=solicitarNumeroEntre(1,8);
    return $esOpcion;
}
$opcion= seleccionarOpcion();
if($opcion==1){
    $palabraWordix=cargarColeccionPalabras();
    $min=1;
    $max=count($palabraWordix); // count va guardar la cantida de elementos en el arreglo 
    echo "Ingrese su nombre: ";
    $nombre=trim(fgets(STDIN));
    echo "Numero de palabra que desea jugar: ";
    $numeroPalabra=solicitarNumeroEntre($min,$max);
    $partida = jugarWordix($palabraWordix[$numeroPalabra-1], strtolower($nombre));
    
    



}elseif($opcion==2){
    $palabraWordix=cargarColeccionPalabras();
    $min=0;
    $max=count($palabraWordix); 
    echo "Ingrese su nombre: ";
    $nombre=trim(fgets(STDIN));
    $numAleatorio= mt_rand($min, $max -1); //use mt_rand para obtener un numero aleatorio dentro de un rango
    $partida = jugarWordix($palabraWordix[$numAleatorio], strtolower($nombre));//$numAleatorio va ser mi indice para la palabra aleatoria
    
}elseif($opcion==3){
    $arrayPartidas = cargarColeccionPartida();
    echo "Que numero de partida quiere ver: ";
    $numPartida= solicitarNumeroEntre(1,count($arrayPartidas));
    echo "\n Partida WORDIX numero ". $numPartida . " : palabra: ". $arrayPartidas[$numPartida-1]["palabraWordix "];
    echo "\n Jugador : ". $arrayPartidas [$numPartida]["jugador"];
    echo "\n Puntaje : ". $arrayPartidas [$numPartida]["puntaje"];
    if ($arrayPartidas [$numPartida]["puntaje"] == 0){
        echo "\n Intentos : No adivino la palabra.";
    }else{
        echo "\n Intentos : ". $arrayPartidas [$numPartida]["intentos"];
    }
}elseif($opcion==4){
    $arrayPartidas = cargarColeccionPartida();
    echo "Nombre del jugador que desea ver la partida : ";
    $nomPartidaGanada = trim (fgets(STDIN));

    $i=0;
    $recorrido= count($arrayPartidas);
    $gano= false;
    $existeJugador = false;
    while ($i < $recorrido && !$gano){
        if ($nomPartidaGanada == $arrayPartidas[$i]["jugador"]){
            $existeJugador=true;
            if ($arrayPartidas[$i]["puntaje"] != 0){
                echo "\nPartida WORDIX numero ". $i . " : palabra: ". $arrayPartidas[$i]["palabraWordix "];
                echo "\n Jugador : ". $arrayPartidas [$i]["jugador"];
                echo "\nPuntaje : ". $arrayPartidas [$i]["puntaje"];
                echo "\nIntentos : ". $arrayPartidas [$i]["intentos"];
                $gano = true;
            }
        }
        $i = $i +1;
    }
    if ($existeJugador && !$gano) {
        echo "El jugador" . $nomPartidaGanada . " no gano ninguna partida";
       
    }elseif (!$existeJugador) {
        echo "No existe el jugador";
    }
   

    
}elseif($opcion==5){
    $arrayPartidas = cargarColeccionPartida();
    echo "Ingrese un nombre de jugador: ";
    $jugador=trim(fgets(STDIN));
    $i=0;
    $bandera=true;
    while($i<count($arrayPartidas) && $bandera){   //aca vamos a recorrer el arreglo buscando el nombre ingresado
       if($arrayPartidas[$i]["jugador"]==$jugador){ //verificamos si el nombre ingresado esta en el arreglo
          $bandera=false;
          $jugador=$arrayPartidas[$i]["jugador"];
          $resumen=generaResumen($arrayPartidas,$jugador); //invocamos el modulo que genera el arreglo $resumenPartidas(para las estadisticas)
       }
        $i=$i+1;
    }
    if($bandera){    
        echo "no se encontro un jugador con ese nombre"; //si el nombre ingresado no se encuentra en el arreglo jamas va a entrar al primer IF de arriba
    }else{
        $lasVictorias=$resumen["victoria"];
        $laPartida=$resumen["partida"];
        $porcentajeVictorias=($lasVictorias*100)/$laPartida;
        echo "jugador: ".$resumen["jugador"]."\n";
        echo "Partidas: ".$resumen["partida"]."\n";
        echo "Puntaje Total: ".$resumen["puntaje"] ."\n";
        echo "Victorias: ".$resumen["victoria"]."\n" ;
        echo "Porcentaje Victorias:".$porcentajeVictorias."%"."\n";
        echo "Adivinadas: "."\n";
        echo "      Intento 1: ".$resumen["intento1"] ."\n";
        echo "      Intento 2: ".$resumen["intento2"]."\n" ;
        echo "      Intento 3: ".$resumen["intento3"] ."\n";
        echo "      Intento 4: ".$resumen["intento4"] ."\n";
        echo "      Intento 5: ".$resumen["intento5"]."\n";
        echo "      Intento 6: ".$resumen["intento6"] ."\n";
    }  
}elseif($opcion==6){
    
}elseif($opcion==7){
    
}elseif($opcion==8){
    
}


$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
