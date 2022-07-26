<?php
session_start();
require_once('./models/modeloInicio.php');


class ControllerVistasAd{
public $model;
function __construct(){
    $this->model = new ModeloInicio();
    if(!(!empty($_SESSION['usuario']) && $_SESSION['usuario'][1]=="admin" )){
        require_once 'views/static/errores.php'; 
        exit;
    }
}
public function administrador(){
    #Se cambiara por el momento es index.php
    $data["Imagenes"]=$this->model->getCarrusel();#ajsajsj  
        require_once 'views/administrador/carrusel.php';
}
public function adminCarrusel(){
    $data["Imagenes"]=$this->model->getCarrusel();
 
    include_once"views/administrador/carrusel.php";
}
public function adminColaboradores(){
$data['vacantes']= $this->model->getVacantes();
    include_once"views/administrador/colaboradores.php";
}
public function adminPublicaciones(){ 
    $data['publicaciones'] = $this->model->getPublicaciones();
    require_once"views/administrador/publicaciones.php";}

public function adminCatalogos(){
    $data['catalogos'] = $this->model->getPdfs();
    require_once"views/administrador/catalogo.php";}


    public function adminCotiza(){
        $data['cardCotiza']=$this->model->getCotizador();
        require_once"views/administrador/cotiza.php";
    }
    public function adminFabricante(){
        $data['fabricantes'] = $this->model->getFabricantes();
        require_once"views/administrador/fabricantes.php";
    }
    public function adminProductosServ(){
        $data['servicios'] = $this->model->seleccionProSer();
        $data['serv'] = $this->model->getProSer();
        require_once"views/administrador/productosServ.php";
    }
    public function adminUsuarios(){
        $data['usuarios'] = $this->model->getUsuarios();
        require_once"views/administrador/usuarios.php";
    }
    public function adminUsuariosMayoristas(){
        $data['usuarios'] = $this->model->getUsuariosM();
        require_once"views/administrador/usuariosM.php";
    }
    public function postuladosAd(){
        $data['postulados']= $this->model->personasPostuladas();
        require_once"views/administrador/postulados.php";
    }

}
