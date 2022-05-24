<?php
 require_once('./models/modeloInicio.php');

    class ControllerVistas{
      
        public $model;
        public $user;
        public $rol;
        function __construct(){
           
            $this->model = new ModeloInicio();
            
           
        }
        public function funcionario(){

        }
        public function index(){
         $data['Imagenes']=$this->model->getCarrusel();
        require_once "views/inicio.php";
        }
        
        public function vacantes(){
            $data['vacantes']=$this->model->getVacantes();
            require_once"views/vacantes.php";
        }

        public function qsomos(){ require_once "views/static/body-acerca.php"; }
        public function registrar(){ require_once 'views/logins/view-new-login.php';  }
         public function avizoActivacion(){require_once 'views/avizo.php';}
        public function ingresar(){
            //Aqui podremos poner alguna mensaje en caso de que ya se hubiera mandado el mensaje al correo
            //otro mensaje en caso de que el correo no este activado 
             require_once 'views/logins/view-ingresar-user.php'; }

            
    }
  


?>