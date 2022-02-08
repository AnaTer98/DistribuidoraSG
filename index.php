<?php

include_once "config/config.php";
include_once "core/rutas.php";

session_start();
if (isset($_GET['c'])) {
    $controlador = CargarControlador($_GET['c']);
    if (isset($_GET['a'])) {
       if(isset($_GET['id'])){           
        if(isset($_GET['r'])){

            cargarMetodo($controlador, $_GET['a'],$_GET['id'],$_GET['r']);
        }
        cargarMetodo($controlador, $_GET['a'], $_GET['id']);
       }else{
           cargarMetodo($controlador, $_GET['a']);  
       }
    }
}else {
    $controlador = CargarControlador(CONTROLADOR_PRINCIPAL);
    $accion = METODO_PRINCIPAL;
    $controlador->$accion();
}
?>