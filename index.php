<?php

include_once "config/config.php";
include_once "core/rutas.php";

session_start();
if (isset($_GET['c'])) {

    $controlador = CargarControlador($_GET['c']);
    if (isset($_GET['a'])) {
       cargarMetodo($controlador,$_GET['a']);
    }


}else {
    
    $controlador = CargarControlador(CONTROLADOR_PRINCIPAL);
    $accion = METODO_PRINCIPAL;
    $controlador->$accion();
}

?>