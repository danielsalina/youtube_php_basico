<?php

/*
$contador = 1;

while(false){
    echo $contador . " ";
    $contador++;
}

echo "<br>El programa sigue con su vida...";
*/

/*
$contador = 0;
$numero = 7;

while($contador <= 10){
    $resultado = $numero * $contador;
    echo "$numero x $contador = $resultado<br>";
    $contador++;
}

*/

$numeroAnterior = 0;
$numeroActual = 1;
$limite = 10;

while ($limite > 0) {
    echo $numeroActual;

    $siguienteNumero = $numeroAnterior + $numeroActual;
    $numeroAnterior = $numeroActual;
    $numeroActual = $siguienteNumero;

    $limite--;
}