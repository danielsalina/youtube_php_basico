<?php

function obtenerDiaSemana() {
    $dia = [
        "Domingo",
        "Lunes",
        "Martes",
        "Miercoles",
        "Jueves",
        "Viernes",
        "Sábado"
    ];

    $indice = date("w");
    // $indice = 3;

    return $dia[$indice];
}

$dia = obtenerDiaSemana();
// echo "Hoy es $dia";

/*
function generarNumeroAleatorio(){
    $numero = rand(1, 100);

    return $numero;
}

$resultado = generarNumeroAleatorio();

echo "Número aletorio: $resultado";
*/

function obtenerSaludoAleatorio(){
    $saludos = [
        "Hola",
        "Que tal comunidad",
        "¡Buenos días!",
        "¡Hola, mundo!"
    ];

    $indice = array_rand($saludos);

    return $saludos[$indice];
}

$saludo = obtenerSaludoAleatorio();
echo $saludo;