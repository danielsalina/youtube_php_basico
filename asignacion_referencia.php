<?php

$texto = "Hola!";

$saludo_1 = $texto;
$saludo_2 = &$texto;

echo $saludo_1 . "<br>";
echo $saludo_2 . "<br>";

echo "******************<br>";
echo "******************<br>";

$texto = "Chao!";

echo $saludo_1 . "<br>";
echo $saludo_2 . "<br>";

echo "******************<br>";
echo "******************<br>";

$texto = "Good bye!";

echo $saludo_1 . "<br>";
echo $saludo_2 . "<br>";