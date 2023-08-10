<?php

//  AND (&& o and): Este operador devuelve true si tanto la expresión de la izquierda como la de la derecha son verdaderas.
// Null
// []
// ""

var_dump(true AND true AND " ");
echo "<br>";

//  OR (|| o or): Este operador devuelve true si al menos una de las expresiones, ya sea de la izquierda o de la derecha, es verdadera.

var_dump(false OR true OR false);
echo "<br>";

//  NOT (! o not): Este operador se utiliza para negar una expresión, devolviendo true si la expresión original es falsa y false si es verdadera.

var_dump(true OR false );
echo "<br>";

// Ejercitandonos un poco sobre lo aprendido
var_dump(((true AND !false) AND true) OR false);