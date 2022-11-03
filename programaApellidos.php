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

    $opcion=solicitarNumeroEntre(1,8);
    return $opcion
}

if($solicitaNum==1){
    $min=1;
    $max=20; //se relaciona con el punto 7
    echo "ingrese su nombre: ";
    $nombre=trim(fgets(STDIN));
    $numeroPalabra=solicitarNumeroEntre($min,$max);
    $palabraWordix=cargarColeccionPalabras();
    $partida = jugarWordix($palabraWordix[$numeroPalabra-1], strtolower($nombre));


}elseif($solicitaNum==2){
    
}elseif($solicitaNum==3){
    
}elseif($solicitaNum==4){
    
}elseif($solicitaNum==5){
    
}elseif($solicitaNum==6){
    
}elseif($solicitaNum==7){
    
}elseif($solicitaNum==8){
    
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
