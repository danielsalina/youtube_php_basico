<?php

/* $edad = 30;

if($edad == 18){
    echo "TIENES 18 AÑOS";
}elseif ($edad == 30) {
    echo "TIENES 30 AÑOS";
} else {
    echo "ESTAMOS EN EL ELSE";
} */


$punto_cardinal = readline("SELECCIONA UN PUNTO CARDINAL");

if ($punto_cardinal == "N") {
    echo "PERTENECE AL NORTE\n";
} elseif ($punto_cardinal == "S") {
    echo "PERTENECE AL SUR\n";
} elseif ($punto_cardinal == "E") {
    echo "PERTENECE AL ESTE\n";
} else {
    echo "PERTENECE AL OESTE\n";
}