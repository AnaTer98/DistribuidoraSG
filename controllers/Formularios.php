<?php
include_once "models/modeloInicio.php";
include_once "controllers/Acciones.php";
class ControllerFormularios extends ControllerAcciones
{
    private $model;
    private $acciones;
    private $extension;
    function __construct()
    {
      $this->model = new ModeloInicio();
    }
   

    public function registrarUsuario(){
       
        if(isset($_POST["registro"])){

        $nombre = $_POST["nombreUser"];    
        $numero = $_POST["numeroTel"];
        $correo = $_POST["correoUser"];
        $pass   = $_POST["passUser"];
        $hash = md5(rand(0,1000));
        //Verificamos si existe el correo
         $existe = $this->model->verificarCorreo($correo);
            if (isset($existe)&& !empty($existe)) {
                $_SESSION['mensaje']='ya existe el correo';
                header('location:index.php?c=vistas&a=registrar');
            }
            try{
                $guardado = $this->model->registrarUsuario($nombre,$correo,$pass,$numero);
                if($guardado){
                    #aqui se enviara el correo de verificacion para
                    $this->enviarCorreo($nombre,$correo,$hash);
         
                }
        }catch(PDOException $e){
                echo "algo salio mal".$e; 
            }
       
        }else{
            echo "Error al enviar datos intetelo de nuevo ";
        
        }

    
    }

    public function postCarrusel() {  
       
        if(isset($_POST["guardar"])){
            $descripcion = $_POST["descripcion"];
            $imagen = $_FILES["imagen"]["name"];
            if(isset($imagen)){
                $extension = $_FILES["imagen"]["type"];
                $temp = $_FILES["imagen"]["tmp_name"];
                if(!(strpos($extension,'jpg'||strpos($extension,'png')))){#$extension verificar
               #en caso de que sea falso y no acepte este tipo de extension
                }
                $nuevoName = date("m-d-y-H-i-s.").explode("/",$extension)[1];
              
                $ruta = "images/".$nuevoName;
        
                $guardadoDB = $this->model->setCarrusel($ruta,$descripcion);
                if($guardadoDB){
                    try{
                        move_uploaded_file($temp,$ruta);
                        header("Location:index.php?c=vistas&a=adminCarrusel");
                  #hAY QUE PONER UN MENSAJE
                    }catch(Exception $e){
                        echo "Algo va mal al mover ",$e;
                    }
                }

            }else{echo"No se ingreso imagen";}
        }else{
            echo "Algo salio mal al enviar el registro intentelo de nuevo |";
        }
    }    
    public function removeCarrusel($id){
        #$ids = intval($id);
        $eliminado = $this->model->eliminarCarrusel((int)$id);
        $ruta = $this->model->eliminarCarruselImg((int)$id);
var_dump($ruta);
        $imagen = unlink($ruta);
        if($imagen){
            echo "se eliminado la imagen";
        }
        if($eliminado){
            $_SESSION['mensaje']="Registro borrado.";
            $mensaje="Se borro";
           # header("Location:index.php?c=vistas&a=adminCarrusel");
        }else{
            #lo mismo pero con mensaje de que algo salio mal 
           # $mensaje="Algo salio mal";
           $_SESSION['mensaje']="No se ha borrado intentelo de nuevo";
            header("Location:index.php?c=vistas&a=adminCarrusel");
        }
    }
}