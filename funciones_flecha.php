<?php

$suma = fn($a, $b) => $a + $b;

// echo $suma(5,3);

$convertirMayusculas = fn($cadena) => strtoupper($cadena);

// echo $convertirMayusculas("hola, mundo");

$areaCirculo = fn($radio) => M_PI * ($radio ** 2);

// echo $areaCirculo(2);

$isLong = fn($cadena) => strlen($cadena) > 10 ? true : "false";
echo $isLong("Esta es una cadena larga");
echo "<br>";
echo $isLong("No es");