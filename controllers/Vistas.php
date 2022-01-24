<?php

    class ControllerVistas{
      
        public  $model;
        function __construct(){
            require_once('./models/modeloInicio.php');
            $this->model = new ModeloInicio();
        }
        public function index(){
         $data['imagenesC']=$this->model->getCarrusel();   
            
        require_once "views/inicio.php";
      

        }
        
        public function promociones(){}
        public function fabricantes(){}
        public function ingresarOrdenes(){}
        public function catalogo(){}
        public function cotizar(){}        

        public function vacantes(){require_once "views/vacantes.php";}
        public function ingresarCv(){}

        public function qsomos(){ require_once "views/static/body-acerca.php"; }
        public function registrar(){ require_once 'views/logins/view-new-login.php';  }
         public function avizoActivacion(){require_once 'views/avizo.php';}
        public function ingresar(){
            //Aqui podremos poner alguna mensaje en caso de que ya se hubiera mandado el mensaje al correo
            //otro mensaje en caso de que el correo no este activado 
             require_once 'views/logins/view-ingresar-user.php'; }

             public function administrador(){
                require_once'./administrador/index.php';
            }
    }
  


?>