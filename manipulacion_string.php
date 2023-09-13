<?php

$string = "   ¡Que tal, comunidad!     ";

$subString_1 = substr($string, 0, 7);
$subString_2 = ucwords(substr($string, 9));

// echo $subString_2;

$nuevoString_1 = str_replace("tal", "hay", $string);
$nuevoString_2 = str_replace(",", "", $string);

// echo $nuevoString_2;

$posicion_1 = strpos($string, "tal");
$posicion_2 = strpos($string, "a");

// echo $posicion_2;

$sinEspacio_1 = trim($string);
$sinEspacio_2 = trim($string, " ¡");

// echo $sinEspacio_2;

$string_2 = "manzana,pera,mandarina";

$frutas = explode(",", $string_2);

// print_r($frutas);

$array = ["manzana","pera","mandarina"];

$ArrayToString = implode(", ", $array);

echo $ArrayToString;