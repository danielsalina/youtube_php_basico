<?php

// Otra manera de crear un array
// $numeros_enteros = array();

// Array indexados
$numeros = [6,51,87];
$persona = ["Juan", "Perez", 87, "Ciudad de Mexico", true, 1.91];

// Array asociativo
$estudiante_1 = [
    "nombre" => "Fulano",
    "apellido" => "Fulanito",
    "edad" => 19,
    "activo" => true
];

$estudiante_2 = [
    "nombre" => "Sutano",
    "apellido" => "Sutanito",
    "edad" => 17,
    "activo" => true
];

// Array multidimensional
$materias = [
    "alumnos" => [
        "estudiante_1" => $estudiante_1,
        "estudiante_2" => $estudiante_2
    ]
];

var_dump($materias);