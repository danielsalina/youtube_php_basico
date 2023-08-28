<?php

/*
for($i = 1; $i <= 10; $i++){
    echo "$i ";
}
*/

/*
$suma = 0;

for($i = 1; $i <= 100; $i++){
    $suma += $i;
}

echo "La suma de los primeros 100 números es: $suma <br>";
*/

/*
$numero = 5;

for($i = 1; $i <= 10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
*/

/*
$numeros_pares = [];

for ($i = 2; $i <= 20; $i += 2) { 
    $numeros_pares[] = $i;
}

// var_dump($numeros_pares);

for ($i=0; $i <= count($numeros_pares) - 1; $i++) { 
    echo "$numeros_pares[$i] <br>";
}
*/

$altura = 5;

for ($i=1; $i <= $altura ; $i++) { 

    for ($j=1; $j <= $i ; $j++) { 
        
        echo "* ";
    }
    echo "<br>";
}