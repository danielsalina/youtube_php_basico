<?php

function saludar($nombre = "Invitado"){
    return "¡Hola, $nombre! <br>";
}

// echo saludar();
// echo saludar("Maria");

function calcularSuma($numero1, $numero2, $numero3 = 5){
    return $numero1 + $numero2 + $numero3;
}

// echo calcularSuma(5, 5, 7);

function imprimirElemento($array, $indice = 2){
    return $array[$indice];
}

$miArray = ["Manzana", "Banana", "Cereza"];

echo imprimirElemento($miArray) . "<br>";
echo imprimirElemento($miArray, 1);