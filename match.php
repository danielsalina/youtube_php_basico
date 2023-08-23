<?php

/*
$valor = 2;

$resultado = match($valor){
    1 => "Uno",
    2 => "Dos",
    3 => "Tres",

    default => "Otro número"
};

echo $resultado;
*/

/*
$data = ["40.518"];

$resultado = match (true) {
    is_int($data) => "Es un entero",
    is_float($data) => "Es un flotante",
    is_string($data) => "Es un string",

    default => "Tipo de dato desconocido"
};

echo $resultado;
*/

$dia = "Domingo 29+2";

$resultado = match ($dia) {
    "Lunes", "Martes", "Miercoles", "Jueves", "Viernes" => "Trabajar",
    "Sabado" => "Sábado de descanso",
    "Domingo" => "Domingo de compartir",

     default => "Día desconocido"
};

echo $resultado;