<?php

include_once "models/modeloInicio.php";
include_once "controllers/Acciones.php";

class ControllerColaboradores{
    private $model;
    private $acciones;
    function __construct(){
        $this->model = new ModeloInicio();
        $this->acciones = new ControllerAcciones();
    }
    public function removeColaborador($id,$ruta){
        $borradoDb = $this->model->removeColaborador((int)$id);
        $borradoImg= $this->acciones->borrarImg((string)$ruta);
        if($borradoDb && $borradoImg){
            header("Location:index.php?c=vistasAd&a=adminColaboradores");
exit;
        }

    }
    public function postVacantes() {

        if(isset($_POST['guardarV'])){
            $vacante = $_POST['vacante'];
            $descripcion = $_POST['descripcion'];
            $img = $_FILES['img']['name'];
            if(isset($img)){
                $tipo = $_FILES['img']['type'];
                $rutaTemp = $_FILES['img']['tmp_name'];

                if(!(strpos($tipo,'jpg')||strpos($tipo,'png')||strpos($tipo,'jpeg'))){                  
                    echo "NO es de tipo imagen soportada por el servidor";
                }
                $nuevoName = "vac-".date("H-i-s.").explode("/",$tipo)[1];
                $ruta = "images/".$nuevoName;
                $guardado =  $this->model->postVacantes($vacante,$descripcion,$ruta);
                try{
                   
                if($guardado){
                     move_uploaded_file($rutaTemp,$ruta);
                 $_SESSION['mensaje']=[];
                    #poner mensaje que se guardo correctamente 
                    header("Location:index.php?c=vistasAd&a=adminColaboradores");
                }
            }catch(Exception $e){
                echo"NO se guado el registro";
            }
            }

        }

    }
}

?>