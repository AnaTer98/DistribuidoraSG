<?php
include_once "models/modeloInicio.php";
include_once "controllers/Acciones.php";
class ControllerFormularios extends ControllerAcciones
{
    private $model;
    private $acciones;
    private $extension;
    public  $vistas;
    function __construct()
    {
        $this->model = new ModeloInicio();
        $this->acciones = new ControllerAcciones();
    }


    public function registrarUsuario()
    {

        if (isset($_POST["registro"])) {

            $nombre = $_POST["nombreUser"];
            $numero = $_POST["numeroTel"];
            $correo = $_POST["correoUser"];
            $pass   = $_POST["passUser"];
            //Verificamos si existe el correo
            $existe = $this->model->verificarCorreo($correo);
            if (0 !== $existe) {
                $_SESSION['mensajeCorreo'] = array();
                $_SESSION['mensajeCorreo'] = ['Ya existe', 'danger', 'prueba con otro correo'];
                header('Location:index.php?c=vistas&a=registrar');
            } else {
                $hash = md5(rand(0,10000));
                $guardado = $this->model->registrarUsuario($nombre, $correo, $pass, $numero,$hash);
               
                if ($guardado == 1) {
                    $enviado = $this->acciones->enviarCorreo($nombre,$correo,$hash);
                   if($enviado){
                    $_SESSION['mensajeAvizo']= array();
                       #SEssion de que se ha enviado un correo para que verifique su correo 
                        $_SESSION['mensajeActivado']=["success"," Hemos enviado un correo de verificación ha tu cuenta de correo ingresa al link que te enviamos para activar tu cuenta :)"];
                       header('Location:index.php?c=vistas&a=ingresar');
                   }else{
                       #Poner en Variable sesssion deciendo que hubo un error al enviar el correo
                       $_SESSION["mensajeCorreo"]=["Ups!","danger",", intenalo mas tarde."];
                       header('Location:index.php?c=vistas&a=registrar');
                   }
                }
            }
        } else { #else de si existe el formulario
            $_SESSION['mensajeCorreo']= [null,"Paso algo malo intentalo mas tarde","danger"];
                           echo "Error al enviar datos intetelo de nuevo ";
        }
    }

    public function postCarrusel()
    {

        if (isset($_POST["guardar"])) {
            $descripcion = $_POST["descripcion"];
            $imagen = $_FILES["imagen"]["name"];
            if (isset($imagen)) {
                $extension = $_FILES["imagen"]["type"];
                $temp = $_FILES["imagen"]["tmp_name"];
                if (!(strpos($extension, 'jpg') || strpos($extension, 'png' )||strpos($extension, 'jpeg' ) )) { #$extension verificar FALTA CHECAR BIEN QUE ONDA
                    #en caso de que sea falso y no acepte este tipo de extension
                    $_SESSION['mensaje'] = ["info","El archivo seleccionado, ","No es una imagen"];
                    header("Location:index.php?c=vistasAd&a=adminCarrusel");
                    exit;
                }
                $nuevoName = date("m-d-y-H-i-s.") . explode("/", $extension)[1];
                $ruta = "images/" . $nuevoName;
                $guardadoDB = $this->model->setCarrusel($ruta, $descripcion);
                if ($guardadoDB) {
                    try {
                        move_uploaded_file($temp, $ruta);

                        $_SESSION['mensaje']=["success","El registro ha sido,","Guardado"];
                        header("Location:index.php?c=vistasAd&a=adminCarrusel");
                        #hAY QUE PONER UN MENSAJE
                    } catch (Exception $e) {
                        echo "Algo va mal al mover ", $e;
                    }
                }
            } else {
                echo "No se ingreso imagen";
            }
        } else {
            echo "Algo salio mal al enviar el registro intentelo de nuevo |";
        }
    }
    public  function removeCarrusel($id, $ruta)
    {
        var_dump($id, $ruta);
        $DbEliminado = $this->model->eliminarCarrusel((int)$id);
        $imgEliminado = $this->acciones->borrarImg((string)$ruta);
        $_SESSION['mensaje'] = array();
        if ($imgEliminado || $DbEliminado) {
            $_SESSION['mensaje'] = ["warning"," Un elemento del Carrusel ha sido,","Eliminado" ];
            header("Location:index.php?c=vistasAd&a=adminCarrusel");
        } else {
            #lo mismo pero con mensaje de que algo salio mal 
            # $mensaje="Algo salio mal";
            $_SESSION['mensaje'] = ["error","No se ha borrado intentelo de nuevo" ];
            header("Location:index.php?c=vistasAd&a=adminCarrusel");
        }
    }
    public function ingresar()
    {
        if (isset($_POST['ingresar'])) {
            $correo = $_POST["correo"];
            $contrasena = $_POST["pass"];
            $_SESSION['mensajeAvizo'] = array();
            $usuario = $this->model->getUsuario($correo, $contrasena);
            $_SESSION["usuario"]=array();
            if (!empty($usuario) ) {
                if( $usuario["activo"]==1){
                $_SESSION["usuario"]=[$usuario["nombre"],$usuario["rol"]];
                header("Location:index.php");
                }else{

                    $_SESSION['mensajeAvizo'] = ["warning","Aun no has activado tu correo electronico, reviza la bandeja de tu correo"];
                    header("Location:index.php?c=vistas&a=ingresar");
                }

            }else{#En caso que no exista el correo
               $_SESSION['mensajeAvizo']= [ "danger","No te has registrado ."];
               header("Location:index.php?c=vistas&a=ingresar");
            }
        } else { #ingresarUSer
            echo "Algo salio mal intentalo mas tarde";
        }
    }

    public function postCatalogo(){
        if(isset($_POST['catalogoPdf'])){
            $tipoCatalogo = $_POST['tipo'];
            $pdf = $_FILES['catalogo']['name'];
            if(!empty($pdf)){
                $ifPdf = $_FILES['catalogo']['type'];
               
                $tmpPdf = $_FILES['catalogo']["tmp_name"];

                if(!(strpos($ifPdf,'pdf'))){
                   $_SESSION['mensaje']=["danger","El archivo selecionado no es, ","PDF"];
                }
                $nuevoName = date("m-d-y-H-i-s.") . explode("/", $ifPdf)[1];
                $ruta = "PDF/" . $nuevoName;

                $guardadoDB = $this->model->setPdf($tipoCatalogo,$ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    echo'Felicidades';
                    header("Location:index.php?c=vistasAd&a=adminCatalogos");
                }
                

            }

        }else {
            echo"no se registro nada ";
            #$this->removePdf();#Vere mas que show por que no se que mas hacer :/
        }
       
    }
    public function removeCatalogo($id,$ruta){
        if(isset($_POST['catalogoPdf'])){
            $dbEliminado = $this->model->removeCatalogo((int)$id);
            $archEliminado = $this->acciones->borrarImg($ruta);
            if($dbEliminado && $archEliminado){
                $_SESSION['mensaje']= ['warning','Catalogo. ','Eliminado!!'];
                header("Location:index.php?c=vistasAd&a=adminCatalogos");
            }



        }
        
    }
    public function postPublicacion(){
        if(isset($_POST['agregar'])){
            $descripcion = $_POST['descripcion'];
            $imagen = $_FILES['imagen']['name'];
            if(!empty($imagen)){
                $ifPdf = $_FILES['imagen']['type'];
               
                $tmpPdf = $_FILES['imagen']["tmp_name"];

                if(!(strpos($ifPdf,'jpg')||strpos($ifPdf,'png')||strpos($ifPdf,'jpeg'))){
                    echo"no es una imagen"; 
                   
                }
                $fecha = date("t-m-d");
                $hora = date("H-i-s.");
                $nuevoName = "/pub".$fecha.$hora. explode("/", $ifPdf)[1];

                $ruta = "images/publicaciones" . $nuevoName;

                $guardadoDB = $this->model->setPublicacion($descripcion,$ruta,$fecha);
               
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    echo'Felicidades';
                    header("Location:index.php?c=vistasAd&a=adminPublicaciones");
                }
                

            }

        }
    }

}
