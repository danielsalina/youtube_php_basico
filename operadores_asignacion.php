<?php

// Operador de asignación básica (=): 
$numero = 10;
echo $numero  . "<br>" ;

// Operador de asignación con suma (+=): 
$numero_2 = 16;
$numero_2 += 7;
echo $numero_2  . "<br>" ;

// Operador de asignación con resta (-=): 
$numero_2 = 16;
$numero_2 -= 5;
echo $numero_2  . "<br>" ;

// Operador de asignación con multiplicación  (*=): 
$numero_2 = 16;
$numero_2 *= 3;
echo $numero_2  . "<br>" ;

// Operador de asignación con división (/=): 
$numero_2 = 16;
$numero_2 /= 4;
echo $numero_2  . "<br>" ;

// Operador de asignación con módulo (%=):
$numero_2 = 17;
$numero_2 %= 8;
echo $numero_2  . "<br>" ;

// Operador de asignación sobre concatenación (.=): 

$nombre = "Que tal, soy";
$nombre .= " ";
$nombre .= "Pepe";
$saludo = "Hola";

echo "$saludo $nombre";