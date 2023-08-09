<?php

// Igual (==): Comprueba si dos valores son iguales
$numero_1 = 1;
$numero_2 = true;

var_dump($numero_1 == $numero_2);
echo "<br>";

// No igual (!= o <>): Comprueba si dos valores son diferentes.
// Devuelve verdadero si los valores que estamos comparando
// Son diferentes
$numero_3 = 1;
$numero_4 = "1";

//var_dump($numero_3 != $numero_4);
var_dump($numero_3 <> $numero_4);
echo "<br>";

//  Idéntico (===): Comprueba si dos valores son iguales y 
// tienen el mismo tipo de dato.
$numero_5 = 1;
$numero_6 = "1";

var_dump($numero_5 === $numero_6);
echo "<br>";

//  No idéntico (!==): Comprueba si dos valores son diferentes 
// o tienen tipos de datos diferentes.

$numero_7 = false;
$numero_8 = false;

var_dump($numero_7 !== $numero_8);
echo "<br>";

// Mayor que (>), 
// Mayor o igual que (>=)
// Menor que (<)
// Menor o igual que (<=)
// Comprueban las relaciones de orden entre dos valores numéricos.

$numero_9 = 18;
$numero_10 = 18;

var_dump($numero_9 <= $numero_10);
echo "<br>";