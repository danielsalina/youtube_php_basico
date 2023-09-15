<?php

$frutas = ["Mango", "Coco", "Tamarindo", "Guayaba"];

$cantidad_frutas = count($frutas);

// echo $cantidad_frutas;

$numeros = [151,161,84,84,896,1658,184];

$cantidad_numeros = count($numeros);

// echo $cantidad_numeros;

$colores = ["Amarillo", "Azul", "Rojo"];
// var_dump($colores);

// echo "<br>";

$nuevos_colores = array_push($colores, "Blanco", "Transparente");
// var_dump($colores);

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];
// var_dump($meses);

// echo "<br>";

$ultimo_mes = array_pop($meses);
// echo "El último mes del array meses es: $ultimo_mes";

// echo "<br>";
// var_dump($meses);

$meses = ["Enero_1", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];
// var_dump($meses);

// echo "<br>";

$primer_mes = array_shift($meses);
// echo "El primer mes del array meses es: $primer_mes";

// echo "<br>";
// var_dump($meses);

$nombre = ["Fulano", "Megano"];
// print_r($nombre);

// echo "<br>";

$agregar_elemento = array_unshift($nombre, "Sutano", "Otro nombre...");
// print_r($nombre);

$frutas_2 = ["Mango", "Coco", "Tamarindo", "Guayaba"];
$fruta_seleccionada = array_slice($frutas_2, 0, 2);

// print_r($fruta_seleccionada);

$colores_2 = ["Amarillo", "Azul", "Rojo"];
if (in_array("Negro", $colores_2)) {
    echo "Si existe el color en el arreglo";
} else {
    echo "El color no esta en el arreglo";
}
