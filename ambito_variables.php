<?php

function calcularSuma($a, $b){
    $resultado = $a + $b;

    return $resultado;
}

$x = 5;
$y = 3;

// echo calcularSuma($x, $y);

// echo $resultado;

function generarNumeroRandom(){
    $random = rand(1,100);
    return $random;
}

// echo generarNumeroRandom();
// echo $random;

$global = 110;

function accederGlobal(){
    global $global;
    $global += 7;
    echo $global;
}

// accederGlobal();
// echo "<br>";
// echo $global;

function modificarGlobal(){
    global $variableGlobal;
    $variableGlobal = 7;
}

$variableGlobal = 10;
echo $variableGlobal;
echo "<br>";
modificarGlobal();
echo $variableGlobal;