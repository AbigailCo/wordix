<?php
include_once("wordix.php");

/***** DATOS DE LOS INTEGRANTES *******/
/*Corrales Abigail Candelaria. LEGAJO 4251. Tec en desarrollo web. Github AbigailCo */
/*Mamani Ariel Maximiliano. LEGAJO 3607. Tec en desarrollo web. Github Ariel-Mamani */

/***** DEFINICION DE FUNCIONES ********/

/**
 * Obtiene una colección de palabras para jugar WORDIX
 * @return array
 */
function cargarColeccionPalabras()
{
    //sin parametros formales
    //array $coleccionPalabras
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "AMIGO","PERRO", "MADRE", "COSMO", "ARBOL"
    ];

    return ($coleccionPalabras);
}

//Modulo carga una coleccion de partidas en un arreglo indexado y asociativo
/**
 * @return array
 */
function cargarColeccionPartida (){
    //sin parametros formales
    //array $coleccionPartidas
    /*$coleccionPartidas=[];
    $coleccionPartidas[0] = ["palabraWordix"=> "QUESO" , "jugador" => "majo", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[1] = ["palabraWordix"=> "CASAS" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix"=> "PIANO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[3] = ["palabraWordix"=> "YUYOS" , "jugador" => "majo", "intentos"=> 1, "puntaje" => 17];
    $coleccionPartidas[4] = ["palabraWordix"=> "TINTO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[5] = ["palabraWordix"=> "HUEVO" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[6] = ["palabraWordix"=> "PISOS" , "jugador" => "majo", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[7] = ["palabraWordix"=> "FUEGO" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[8] = ["palabraWordix"=> "GOTAS" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[9] = ["palabraWordix"=> "MUJER" , "jugador" => "majo", "intentos"=> 2, "puntaje" => 14];
    $coleccionPartidas[10] = ["palabraWordix"=> "MELON" , "jugador" => "rudolf", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[11] = ["palabraWordix"=> "MELON" , "jugador" => "pink2000", "intentos"=> 6, "puntaje" => 10];
   return $coleccionPartidas;*/

   $coleccion = [];
$pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
$pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
$pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
$pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
$pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
$pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
$pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
$pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];

array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
return $coleccion;
}

/**
 * Genera el historial de partidas del jugador
 * @param $arrayPartidas
 * @param $jugador
 * @return array
 */
function generaResumen($arrayPartidas,$jugador){
    //int $i, $numeroIntento, $numeroIntento1, $numeroIntento2, $numeroIntento3, $numeroIntento4, $numeroIntento5, $puntaje, $victoria, $partidas, $contadorPartida
    //array $resumenPartida
    //INICIALIZACION
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
}
$resumenPartida=["jugador"=>$jugador,"partida"=>$contadorPartida,"puntaje"=>$puntaje,   //carga el resumen de las partidas(arreglo asociativo)
                    "victoria"=>$victoria,"intento1"=>$numeroIntento,"intento2"=>$numeroIntento1,
                    "intento3"=>$numeroIntento2,"intento4"=>$numeroIntento3,"intento5"=>$numeroIntento4,"intento6"=>$numeroIntento5];
return $resumenPartida;
}


/**
 *RETONA el nombre que ingresa el usuario en minusculas 
 * sin parametros formales
 * @return string
 */
function solicitarJugador(){    
    //string $jugador $tieneLetra 
    //boolean $bandera
    $bandera=true;
    do{                  //va a seguir haciendo ciclos hasta que el usuario ingrese bien el nombre del jugador
    echo "Ingrese su nombre";
    $jugador=trim(fgets(STDIN));
    if(ctype_alpha($jugador)){    //verifica que el nombre este compuesto por letras
        $tieneLetra=strtolower($jugador);
        $bandera=false;
    }else{
        echo "La cadena ".ctype_alpha($jugador). " no esta compuesta en su totalidad por letras.\n";
        echo "VUELVA A INGRESAR EL NOMBRE \n";
     }
    }while($bandera);
    return $tieneLetra;  
}
/**
 * Compara los nombres de jugador y las palabras
 * @param array $arraypartidas
 * @return int
 */
function comparacion($partida1,$partida2){
    //int $orden
    if($partida1["jugador"]==$partida2["jugador"]){
        if($partida1["palabraWordix"]==$partida2["palabraWordix"]){
            $orden= 0;
        }elseif($partida1["palabraWordix"]>$partida2["palabraWordix"]){
            $orden= 1;
        }else{
            $orden= -1;
        }
    }elseif($partida1["jugador"]>$partida2["jugador"]){
             $orden= 1;
    }else{
            $orden= -1;
        }
    return $orden;
}
/**
 *Muestra la coleccion de partidas ordenado alfabeticamente
 * @param array $arrayPartidas
 */
function muestraArrayOrdenado($arrayPartidas){
    uasort($arrayPartidas, "comparacion");
    print_r($arrayPartidas);
}
/**
 * Verifica si el jugador ya jugo con el numero de plabra que ingreso
 * @param string $jugador
 * @param string $palabraWordix
 * @param array $arrayPartidas
 * @return bool
 */
function jugoConPalabra($nombre, $palabraWordix,$arrayPartidas){
    //bool $bandera
    //int $i
    $bandera = false;
    $i=0;
    while($i<count($arrayPartidas)&& !$bandera){
            if($arrayPartidas[$i]["palabraWordix"]==$palabraWordix && $arrayPartidas[$i]["jugador"]==$nombre){
                $bandera=true;
            }elseif($i==count($arrayPartidas)&& !$bandera){
                $bandera=true;
            }
        $i++;
    }
    return $bandera;
}


//FUNCION PARA LA OPCION 7 
/**
 * VERIFICA que la plabra que ingresamos no este en el arreglo $coleccionDePalabras
 * @param strin $palabraNueva
 * @return string
 */
function verificaPalabra($palabraNueva,$palabraWordix){
    //int $i, 
    //bool $bandera
    $bandera=true;
    $i=0;
    while($i<count($palabraWordix)&& $bandera){  
        if($palabraWordix[$i]==$palabraNueva){ //va a buscar en el arreglo si esta la palabra que ingresamos 
         $bandera=false;                       // y si la palabra esta entra al IF y retorna false 
        }                                      //si la palabra no esta jamas entra al IF
    $i=$i+1;         
    }
    return $bandera;
}

/**MODULO muestra menu 
 * sin parametros formales
 * @return int
 */
function seleccionarOpcion(){
    //int $esOpcion
    echo "\n          MENU PARA JUGAR WORDIX       \n";
    echo "1- Jugar al wordix con una palabra alegida \n";
    echo "2- Jugar al wordix con una palabra aleatoria \n";
    echo "3- Mostrar una partida \n";
    echo "4- Mostrar partida ganadora \n";
    echo "5- Mostrar resumen de jugador\n";
    echo "6- Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo "7- Agregar una palabra de 5 letras \n";
    echo "8- Salir \n";
    echo "\n PORFAVOR INGRESE EL NUMERO DE LA OPCION: ";
    $esOpcion=solicitarNumeroEntre(1,8);
    return $esOpcion;
}
/*********** PROGRAMA PRINCIPAL *******/

$palabraWordix=cargarColeccionPalabras();
$arrayPartidas= cargarColeccionPartida();
do{
    //array $palabraWordix, $partida, $arrayPartidas, $lasVictorias, $laPartida, $resumen
    //INT $min, $max, $numeroPalabra, $numPartida, $i, $recorrido,  $indiceNuevaPalabra, $numAleatorio,
    //string $nombre, $nomPartidaGanada, $decision
    //boolean $bandera, $gano, $existeJugador, $verifica
    //float $porcentajeVictorias
   
    $opcion= seleccionarOpcion();
    switch($opcion){
        case 1:
             $min=1;
             $max=count($palabraWordix); // count va guardar la cantida de elementos en el arreglo 
             $nombre=solicitarJugador();
             echo "Numero de palabra que desea jugar: ";
             $numeroPalabra=solicitarNumeroEntre($min,$max);
             $i=0;
             $bandera=true;
             while($i<count($arrayPartidas) && $bandera){
                $bandera= jugoConPalabra($nombre,$palabraWordix[$numeroPalabra],$arrayPartidas);
                if($bandera){   
                    echo "Ingrese otro numero ya jugo con esa palabra: ";
                    $numeroPalabra=solicitarNumeroEntre($min,$max);
                }
                $i=$i+1;
            }
            $partida = jugarWordix($palabraWordix[$numeroPalabra], strtolower($nombre));
            $arrayPartidas[count($arrayPartidas)]=["palabraWordix"=>$partida["palabraWordix"], "jugador"=>$nombre, "intentos"=>$partida["intentos"], "puntaje"=>$partida["puntaje"]];
            break;
        case 2:
             $min=0;
             $max=count($palabraWordix); 
             $nombre=solicitarJugador();
             $numAleatorio= mt_rand($min, $max -1); //use mt_rand para obtener un numero aleatorio dentro de un rango
             $i=0;
             $bandera=true;
             while($i<count($arrayPartidas) && $bandera){
                $bandera= jugoConPalabra($nombre,$palabraWordix[$numAleatorio-1],$arrayPartidas);
                if($bandera){   
                    echo "Ingrese otro numero ya jugo con esa palabra: ";
                    $numeroPalabra=solicitarNumeroEntre($min,$max);
                }
                $i=$i+1;
            }
            $partida = jugarWordix($palabraWordix[$numAleatorio], strtolower($nombre));//$numAleatorio va ser mi indice para la palabra aleatoria
            $arrayPartidas[count($arrayPartidas)]=["palabraWordix"=>$partida["palabraWordix"], "jugador"=>$nombre, "intentos"=>$partida["intentos"], "puntaje"=>$partida["puntaje"]];
            break;
        case 3;
             echo "Que numero de partida quiere ver: ";
             $numPartida= solicitarNumeroEntre(1,count($arrayPartidas))-1;
             echo "\n Partida WORDIX numero ". $numPartida . " : palabra: ". $arrayPartidas[$numPartida-1]["palabraWordix"];
             echo "\n Jugador : ". $arrayPartidas [$numPartida]["jugador"];
             echo "\n Puntaje : ". $arrayPartidas [$numPartida]["puntaje"];
             if ($arrayPartidas [$numPartida]["puntaje"] == 0){
               echo "\n Intentos : No adivino la palabra.";
             }else{
                  echo "\n Intentos : ". $arrayPartidas [$numPartida]["intentos"];
             }
             break;
        case 4:
            echo "Nombre del jugador que desea ver la partida : \n";
            $nomPartidaGanada = trim (fgets(STDIN));
            $i=0;
            $recorrido= count($arrayPartidas);
            $gano= false;
            $existeJugador = false;
            while ($i < $recorrido && !$gano){
                 if ($nomPartidaGanada == $arrayPartidas[$i]["jugador"]){
                    $existeJugador=true;
                    if ($arrayPartidas[$i]["puntaje"] != 0){
                        echo "\nPartida WORDIX numero ". $i . " : palabra: ". $arrayPartidas[$i]["palabraWordix"];
                        echo "\n Jugador : ". $arrayPartidas [$i]["jugador"];
                        echo "\nPuntaje : ". $arrayPartidas [$i]["puntaje"];
                        echo "\nIntentos : ". $arrayPartidas [$i]["intentos"];
                        $gano = true;
                     }
                 }
                $i = $i +1;
            }
            if ($existeJugador && !$gano) {
                echo "\n El jugador: " . $nomPartidaGanada . " no gano ninguna partida";
            }elseif (!$existeJugador) {
                echo "\nNo existe el jugador.";
            }
            break;
        case 5:
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
            if($bandera){    //si el nombre ingresado no se encuentra en el arreglo jamas va a entrar al primer IF de arriba
                echo "no se encontro un jugador con ese nombre"; 
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
            break;
        case 6:
            muestraArrayOrdenado($arrayPartidas);
            break;
        case 7:
             do{
                $indiceNuevaPalabra = count($palabraWordix);
                $palabraNueva=leerPalabra5Letras();    //La funcion que llamamos nos pide una palabra de 5 letras y si no cumple con esa condicion vuelve a pedir una palabra
                $verifica=verificaPalabra($palabraNueva,$palabraWordix); //Llamamos a la funcion para verificar si la palabra ingresada esta en el arreglo $coleccionPalabras
                 if($verifica){                            //Si la palabra no esta entra al IF 
                     $palabraWordix[$indiceNuevaPalabra+1]=strtoupper($palabraNueva); //Aca guarda la nueva palabra en el arreglo
                     echo "\n Gracias!! \n Desea agregar otra? (S/N)";
                    $decision = trim(fgets(STDIN));
                }else{                                     
                     $decision="s";
                     echo "ESA PALABRA YA ESTA EN EL JUEGO \n";
                }
                }while ($decision == "s");
                    print_r($palabraWordix);        //imprimo el arreglo $coleccionPalabras con la palabra nueva
            break;
        case 8;
            echo "Te esperamos la proxima!!";
            break;
    }
    $bandera=true;
    while($bandera){
        echo "\n ¿Desea volver al menu? (S/N) \n";
        $decision = trim (fgets(STDIN));
        if(!is_string($decision)|| $decision=="s"|| $decision=="n"){
            $bandera=false;
        }else{
            echo "ERROR, ingrese S/N";
            $bandera=true;
        }
        
    }
}while ($decision == "s");
echo "\n GRACIAS!! ";