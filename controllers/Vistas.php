<?php
 require_once('./models/modeloInicio.php');

    class ControllerVistas{
      
        public $model;
        public $user;
        public $rol;
        function __construct(){
           
            $this->model = new ModeloInicio();
            
           
        }
        public function index(){
            $data['serviciosProductos'] = $this->model->servicioConPdf();
            $data['publicaciones'] = $this->model->getPublicaciones();
         $data['Imagenes']=$this->model->getCarrusel();
        require_once "views/inicio.php";
        }
        
        public function vacantes(){
            $data['vacantes']=$this->model->getVacantes();
            
            require_once "views/vacantes.php";
        }

        public function qsomos(){ require_once "views/static/body-acerca.php"; }
        public function registrar(){ require_once 'views/logins/view-new-login.php';  }
         public function avizoActivacion(){require_once 'views/avizo.php';}
        public function ingresar(){
            //Aqui podremos poner alguna mensaje en caso de que ya se hubiera mandado el mensaje al correo
            //otro mensaje en caso de que el correo no este activado 
             require_once 'views/logins/view-ingresar-user.php'; }

         
        public function catalogos(){
            $catalogos = $this->model->getPdfs();
            if($catalogos[0]['tipo']=='normal'){
                $array = array("menudeo" => $catalogos[0]['rutaPdf']!== NULL ? "":"" ,"mayoreo"=>$catalogos[1]['rutaPdf'] );
            }else{
                $array = array("menudeo" => $catalogos[1]['rutaPdf'],"mayoreo"=>$catalogos[0]['rutaPdf']);
            }
           
            $data['catalogos'] = $array;
            require_once "views/catalogos.php";
        }
        public function cotiza()
        {
            $data['cardCotiza']=$this->model->getCotizador();
            require_once "views/cotizacion.php";
        }   
        public function fabricantes()
        {
            require_once "views/fabricantes.php";
        }
    }
  


?>