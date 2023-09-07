<?php

function suma(int $a, int $b): int{
    return $a + $b;
}

// echo suma(7,8);

function saludar(string $saludo, string $nombre = "Fulano"): string{
    return "$saludo! $nombre";
}

// echo saludar("Hello!");


function sumarArray(array $numeros): int | float{
    $suma = 0;

    foreach($numeros as $numero){
        $suma += $numero;
    }
    
    return $suma;
}

$nums = [2,4,6,8,10,10.87];
echo $total = sumarArray($nums);