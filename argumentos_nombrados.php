<?php

function calcularPrecioTotal($precio, $descuento, $impuestos){
    $precioTotal = $precio - $descuento + $impuestos;

    return $precioTotal;
}

$total = calcularPrecioTotal(impuestos:10, descuento:15, precio:100);
// echo $total;

function generarSaludo($nombre, $mensaje = "¡Hola!"){
    return "$mensaje $nombre";
}

// echo generarSaludo("Maria") . "<br>";
// echo generarSaludo("Juan", mensaje:"¡Saludos!");

function saludar2($nombre, $apellido, $edad){
    return "¡Hola, $nombre $apellido, tienes $edad años";
}

echo saludar2("Juan", apellido:"Perez", edad:56) . "<br>";
echo saludar2(nombre:"Fulano", apellido:"Fulanito", edad:16);