<?php

   function CargarControlador($controlador){
       $nombreClase = "Controller".ucwords($controlador);
       $archivoControlador = "controllers/".ucwords($controlador).".php";

       if(!is_file($archivoControlador)){
           $archivoControlador = CONTROLADOR_PRINCIPAL.".php";
       }
       require_once $archivoControlador;
       $control = new $nombreClase();
       //Se regrasara el archivo de la clase como tal en caso de que exista
       return $control;
   }
   function cargarMetodo($controller,$method,$id=null)
   {    
       if (isset($method)&&method_exists($controller,$method)) {
           if ($id=null) {
               $controller();
           }else{
               $controller->$method($id);
           }
       }else{
           $controller->METODO_PRINCIPAL();
       }
   }

?>