<?php

$plugin_name = "miplugin";

if (!empty($plugin_name)) {
    $plugin_file = "plugins/" . $plugin_name . ".php";

    if (file_exists($plugin_file)) {
        require $plugin_file;
    } else {
        echo "El archivo no existe";
    }
    
}