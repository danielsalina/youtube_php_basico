<?php

// if($_SERVER["REQUEST_METHOD"] === "POST")
if(true){
    require_once "validaciones.php";

    if (validarCampos($_POST)) {
        require_once "almacenamiento.php";

        guardarUsuario($_POST);
    }
}