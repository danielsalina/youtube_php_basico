<?php

# Concatenación con el operador del punto
$nombre = "Juan";
$apellido = "Pérez";

echo $nombre . " " . $apellido . "<br>";

# Concatenación con asignación con concatenación
$texto = "Hola";
$texto .= " ";
$texto .= "Mundo! <br>";

echo $texto;

# Concatenación con comillas dobles
$nombre = "Juan";
$apellido = "Pérez";

echo "$nombre $apellido <br>";

# Concatenación con las llaves
$persona = array("nombre" => "Ana", "apellido" => "Gómez");

echo "Hola! Mi nombre es: {$persona['nombre']}";