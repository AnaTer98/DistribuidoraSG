<?php

    class ControllerUser{
    

        public function index()
        {
            //echo phpinfo();
     // $_SERVER['REQUEST_URI']
               
  
        require_once "views/inicio.php";
        }
        
        public function registrar(){
            echo "hoal";
           
            echo '0====> si llega aqui !!';
            require_once 'views/logins/view-new-login.php'; 
      
        }


      
        public function ingresar(){
            echo 'que pedo !!';
            require_once 'views/logins/view-new-login.php'; 
        }


    }


?>