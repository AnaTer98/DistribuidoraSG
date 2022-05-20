<?php

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
        require_once 'views/administrador/index.php';
}
public function adminCarrusel(){
    $data["Imagenes"]=$this->model->getCarrusel();
 
    include_once"views/administrador/carrusel.php";
}
public function adminColaboradores(){
$data['vacantes']= $this->model->getVacantes();
    include_once"views/administrador/colaboradores.php";
}
public function adminPublicaciones(){ require_once"views/administrador/publicaciones.php";}

public function adminCatalogos(){
    $data['catalogos'] = $this->model->getPdfs();
    require_once"views/administrador/catalogo.php";}


    public function adminCotiza(){
        require_once"views/administrador/cotiza.php";
    }
    public function adminFabricante(){
        require_once"views/administrador/fabricantes.php";
    }
    public function adminProductosServ(){
        require_once"views/administrador/productosServ.php";
    }
    public function adminUsuarios(){
        require_once"views/administrador/usuarios.php";
    }
}
