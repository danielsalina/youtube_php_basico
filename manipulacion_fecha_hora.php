<?php

$fecha_actual = date("Y-m-d H:i:s");
// echo $fecha_actual;

$marca_tiempo_actual = time();
//echo $marca_tiempo_actual;

$fecha_base = "2023-08-01";
$fecha_nueva = strtotime("+1 week", strtotime($fecha_base));
$resultado = date("Y-m-d", $fecha_nueva);

// echo $resultado;

$fecha_inicio_2 = new DateTime("2023-08-15");
$fecha_fin = new DateTime("2023-08-20");

$intervalo = $fecha_inicio_2->diff($fecha_fin);

echo "La diferencia son: " . $intervalo->days . " dias";