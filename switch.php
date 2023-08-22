<?php

$dia = "Miercoles";

switch($dia){
    case "Lunes":
        echo "Estamos en el día Lunes";
    break;

    case "Martes":
        echo "Estamos en el día Martes";
    break;

    case "Miercoles":
        echo "Estamos en el día Miercoles";
    break;

    case "Jueves":
        echo "Estamos en el día Jueves";
    break;

    case "Viernes":
        echo "Estamos en el día Viernes";
    break;

    case "Sabado":
        echo "Estamos en el día Sabado";
    break;

    case "Domingo":
        echo "Estamos en el día Domingo";
    break;
    
    default:
        echo "No seleccionaste un día valido";
    break;
}