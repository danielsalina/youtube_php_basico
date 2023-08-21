<?php

/*
$edad = 19;
$altura = 150;

if ($edad >= 18) {
    if ($altura >= 160) {
        echo "Puedes subir a la montaña rusa";
    } else {
        echo "Eres demasiado bajo para subir a la montaña rusa";
    }
} else {
    echo "Eres demasiado joven para subir a la montaña rusa";
}
*/

/*
$temperatura = 35;
$clima = "no soleado";

if ($temperatura >= 30) {
    if ($clima === "soleado") {
        echo "Hace calor y está soleado, vamos a la playa";
    } else {
        echo "Hace calor, pero el clima no esta ideal para ir a la playa";
    }
    
} elseif($temperatura >= 20) {
    echo "El clima es agradable, disfruta del día al aire libre";
}
else {
    echo "Hace frio, es mejor quedarse en casa";
}
*/

$nota = 9;

if ($nota >= 90 AND $nota <= 100) {
    $calificacion = "A";
    $estado = "Aprobado";
    echo "Tu calificación es $calificacion, estas $estado";
    } elseif($nota >= 80 AND $nota <= 89){
    $calificacion = "B";
    $estado = "Aprobado";
    echo "Tu calificación es $calificacion, estas $estado";
    } elseif($nota >= 70 AND $nota <= 79){
        $calificacion = "C";
        $estado = "Aprobado";
        echo "Tu calificación es $calificacion, estas $estado";
    }elseif($nota >= 60 AND $nota <= 69){
        $calificacion = "D";
        $estado = "Aprobado";
        echo "Tu calificación es $calificacion, estas $estado";
    }
    elseif($nota >= 50 AND $nota <= 59){
        $calificacion = "E";
        $estado = "Aprobado";
        echo "Tu calificación es $calificacion, estas $estado";
    }
else {
    $calificacion = "F";
    $estado = "Reprobado";
    echo "Tu calificación es $calificacion, estas $estado";
}
