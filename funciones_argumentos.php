<?php

function saludar($nombre){
   return "¡Hola $nombre! ";
}

// echo saludar("Fulano");

function suma($a, $b){
    return $a + $b;
}

// echo suma(9485,55);

function duplicar(&$numero){
    return $numero *= 2;
}

$valor = 5;
echo duplicar($valor) . "<br>";
echo duplicar($valor) . "<br>";
echo duplicar($valor);