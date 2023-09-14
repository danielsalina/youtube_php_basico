<?php

$numeros = 1235.789;

$numeroFormateado = number_format($numeros, 2, ",", ".");

// echo $numeroFormateado;

$numeros_2 = 4.459;
$numeroRedondeado = round($numeros_2);

// echo $numeroRedondeado;

$numeros_3 = 5.9;

$ceilNumber = ceil($numeros_3);

//  echo $ceilNumber;

$numero_4 = 6.9;

$floorNumber = floor($numero_4);

// echo $floorNumber;

$randomNumber = rand(0, 10);

// echo $randomNumber;

$numero_5 = [5,30,9,20,7];

$minValue = min($numero_5);

// echo $minValue;

$numero_6 = [5,30,9,200,7];

$maxValue = max($numero_6);

// echo $maxValue;

$numero_7 = -105165.15161;

$absNumber = abs($numero_7);

// echo $absNumber;

$numero_8 = 25;

$sqrtValue = sqrt($numero_8);

echo $sqrtValue;