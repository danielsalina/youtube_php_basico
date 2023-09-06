<?php

function mostrarElementos(...$elementos){
    foreach($elementos as $elemento){
        echo "$elemento <br>";
    }
}

// mostrarElementos("Manzana", "Banana", "Naranja");

function concatenarCadena($inicio, ...$cadenas){
    $resultado = $inicio;
    foreach($cadenas as $cadena){
        $resultado .= " " . $cadena;
    }

    return $resultado;
}

// echo concatenarCadena("Hola!", "esto", "es", "PHP");

function sumar($a, $b, $c=0){
    return $a + $b + $c;
}

$numeros = [5,9];
$resultado = sumar(...$numeros );
// echo $resultado;

function mostrarItem(...$items){
    foreach($items as $item){
        echo "$item <br>";
    }
}

$frutas = ["Manzana", "Banana", "Naranja"];

mostrarItem(...$frutas);