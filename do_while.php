<?php

/*
$numero = 1;

do {

    echo $numero . " ";
    $numero++;

} while ($numero <= 10);
*/

/*
$password = false;

do {

    $pass = readline("Ingresa tu contraseña:");

    if (strlen($pass) >= 6) {
        $password = true;
    } else {
        echo "La contraseña debe tener al menos 6 caracteres.";
    }

} while(!$password);
*/

/*
$suma = 0;

do {

    $numero = (int) readline("Ingresa un número (0 para salir): ");
    $suma += $numero;

} while($numero != 0);

echo "La suma total es: $suma \n";
*/

$numero_secreto = rand(1, 100);

do {

    $adivinanza = (int) readline("Adivina el número entre el 1 y 100: ");

    if ($adivinanza < $numero_secreto) {
        echo "Demasiado bajo. Intentalo de nuevo. \n";
    } else {
        echo "Demasiado alto. Intentalo de nuevo. \n";
    }
    
} while ($adivinanza != $numero_secreto);

echo "!Felicidades! Adivinaste el número secreto. \n";