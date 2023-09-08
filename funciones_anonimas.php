<?php

$sum = function($a, $b){
    return $a + $b;
};

// echo $sum(2,3);


$numeros = [1,2,3,4,5];
$filtrado = array_filter($numeros, function($valor){
    return $valor % 2 === 0;
});

// var_dump($filtrado);


$suma = function($a, $b){
    return $a + $b;
};

$resta = function($a, $b){
    return $a - $b;
};

function operar($valor1, $valor2, $operacion){
    return $operacion($valor1, $valor2);
}

echo $resultado = operar(15,3, $suma);
echo "<br>";
echo $resultado = operar(50,3, $resta);