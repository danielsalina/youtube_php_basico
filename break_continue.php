<?php

/*
for ($i=1; $i <= 10 ; $i++) { 
    echo "$i ";
    if ($i === 3) {
        break;
    }
}
*/

/*
$numero = 1;

while ($numero <= 10) {
    if ($numero === 5) {
        break;
    }
    echo "$numero ";
    $numero++;
}
*/

/*
for ($i=1; $i <= 5 ; $i++) { 
    if ($i === 3) {
        continue;
    }
    echo "$i ";
}
*/

/*
$numero = 1;

while ($numero <= 15) {
    if ($numero === 5) {
        $numero++;
        continue;
    }
    echo "$numero ";
    $numero++;
}
*/

$numeros = [1,2,3,4,5];

foreach ($numeros as $value) {
    if ($value === 5) {
        break;
    }
    echo "$value ";
}