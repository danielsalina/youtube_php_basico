<?php

/*
$colores = ["rojo", "verde", "azul"];

foreach($colores as $indice => $color){
    echo "El indice es: $indice y el valor es: $color <br>";
}
*/

/*
$edades = ["Juan" => 25, "Maria" => 30, "Luis" => 28];

foreach($edades as $nombre => $edad){
    echo "$nombre tiene $edad años <br>";
}*/

$matriz = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

foreach ($matriz as $fila){
    foreach($fila as $valor){
        echo "$valor ";
    }
    echo "<br>";
}