<?php

    class ControllerVistas{
      
        public  $model;
        function __construct(){
            require_once('./models/modeloInicio.php');
           # $this->model = new ModeloInicio();
        }
        public function index(){
           # $data['imagenesC']=$this->model->getCarrusel();   
            
        require_once "views/inicio.php";
      

        }
        
        public function promociones(){}
        public function fabricantes(){}
        public function ingresarOrdenes(){}
        public function catalogo(){}
        public function cotizar(){}        
        public function atencionPersonalizada(){}

        public function vacantes(){require_once "views/vacantes.php";}
        public function ingresarCv(){}

        public function qsomos(){ require_once "views/static/body-acerca.php";
        }
        public function registrar(){
     
            require_once 'views/logins/view-new-login.php'; 
      
        }


      
        public function ingresar(){
            echo 'que pedo !!';
            require_once 'views/logins/view-new-login.php'; 
        }


    }


?>