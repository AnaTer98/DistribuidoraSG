<?php
include_once "models/modeloInicio.php";
include_once "controllers/Acciones.php";
include_once "controllers/VistasAd.php";
class ControllerFormularios extends ControllerAcciones
{
    private $model;
    private $acciones;
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
               
                if ($guardado ==1 ) {
                    $enviado = $this->acciones->enviarCorreo($nombre,$correo,$hash);
                   if($enviado ){
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
                    } catch (Exception $e) {
                        echo "Algo va mal al mover ", $e;
                    }
                }
            } else {
                $_SESSION['mensaje']=["danger","A ocurrido algo mal ","Intentalo de nuevo"];
                header("Location:index.php?c=vistasAd&a=adminCarrusel");
            }
        } else {
            $_SESSION['mensaje']=["danger","Algo mal ha sucedido ","Intentalo de nuevo"];
            header("Location:index.php?c=vistasAd&a=adminCarrusel");

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
                    $_SESSION["usuario"]=[$usuario["nombre"],$usuario["rol"],$usuario['correo'],$usuario['hash'],$usuario['activo']];
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
            $_SESSION['mensajeAvizo']= [ "danger","Algo salio mal intentalo más tarde."];
            header("Location:index.php?c=vistas&a=ingresar");
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
                   header("Location:index.php?c=vistasAd&a=adminCatalogos");
                   exit;
                }
                $nuevoName = date("m-d-y-H-i-s.") . explode("/", $ifPdf)[1];
                $ruta = "PDF/" . $nuevoName;
                $guardadoDB = $this->model->setPdf($tipoCatalogo,$ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php?c=vistasAd&a=adminCatalogos");
                }
            }
        }else {
            $_SESSION['mensaje']=["warning","El formulario no se, ha enviado correctamente, ","Intenlo de nuevo "];
            header("Location:index.php?c=vistasAd&a=adminCatalogos");
            exit;
            
        }
    }
    public function removeCatalogo($id,$ruta){
        if(isset($_POST['catalogoPdf'])){
            $dbEliminado = $this->model->removeCatalogo((int)$id);
            $archEliminado = $this->acciones->borrarImg($ruta);
            if($dbEliminado && $archEliminado){
                $_SESSION['mensaje']= ['warning','Catálogo. ','Eliminado!!'];
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
                    $_SESSION['mensaje']=["danger","El archivo selecionado no es, ","Imagen"];
                    header("Location:index.php?c=vistasAd&a=adminPublicaciones");
                    exit;
                }
                $fecha = date("d-m-y");
                $hora = date("H-i-s.");
                $nuevoName = "/pub".$fecha.$hora. explode("/", $ifPdf)[1];
                $ruta = "images" . $nuevoName;
                $guardadoDB = $this->model->setPublicacion($descripcion,$ruta,$fecha);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php?c=vistasAd&a=adminPublicaciones");
                }
            }
        }
    }
    public function removePublicacion($id, $rutaImg){
       $borrado = $this->acciones->borrarImg($rutaImg);
       $borradoRe = $this->model->removePublicacion($id);
        if($borrado || $borradoRe ){
            $_SESSION['mensaje']=["info","La publicacion ha sido, ","Eliminada"];
            header("Location:index.php?c=vistasAd&a=adminPublicaciones");
        }else{
            $_SESSION['mensaje']=["warning","No se ha logrado borrar, intentelo ","mas tarde"];
            header("Location:index.php?c=vistasAd&a=adminPublicaciones");
        }
    }
    public function postCotiza(){
        if(isset($_POST['cotizador'])){
            $imagen = $_FILES['img']['name'];
            if(!empty($imagen)){
                $ifPdf = $_FILES['img']['type'];
                $tmpPdf = $_FILES['img']["tmp_name"];
                if(!(strpos($ifPdf,'jpg')||strpos($ifPdf,'png')||strpos($ifPdf,'jpeg'))){
                    $_SESSION['mensaje']=["danger","El archivo selecionado no es, ","Imagen"]; 
                    header("Location:index.php?c=vistasAd&a=adminCotiza");
                    exit;
                }
                $fecha = date("t-m-d");
                $hora = date("H-i-s.");
                $nuevoName = "/cot".$fecha.$hora. explode("/", $ifPdf)[1];
                $ruta = "images/" . $nuevoName;
                $guardadoDB = $this->model->setCotiza($ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php?c=vistasAd&a=adminCotiza");
                }
            }
        }
    }
    public function removeCotizador($id,$ruta){
        $borrado = $this->acciones->borrarImg($ruta);
        $registroBorrado = $this->model->removeCotizador($id);
        if($borrado || $registroBorrado){
        $_SESSION['mensaje']=["info","La tarjeta de cotizador fue, ","Eliminada"];
        header("Location:index.php?c=vistasAd&a=adminCotiza");
        }else{
        $_SESSION['mensaje']=["warning","No se ha logrado borrar, intentelo ","mas tarde"];
        header("Location:index.php?c=vistasAd&a=adminCotiza");
        }
    }
    public function removeFabricante($id,$r){
        $borradoPdf = $this->acciones->borrarImg($r);
        $borradoRegistro = $this->model->removeFabricante($id);
        if($borradoPdf || $borradoRegistro){
            $_SESSION['mensaje']=["danger","El registro ha sido, ","Eliminado"];
            header("Location:index.php?c=vistasAd&a=adminFabricante");

        }

    }
    public function postServ(){
        if (isset($_POST['guardarServ'])) {
            $servicio = $_POST['opcion'];
             $pdf = $_FILES['pdf']['name'];
            if(!empty($pdf)){
                $ifPdf = $_FILES['pdf']['type'];
                $tmpPdf = $_FILES['pdf']["tmp_name"];
                if(!(strpos($ifPdf,'pdf'))){
                   $_SESSION['mensaje']=["danger","El archivo selecionado no es, ","PDF"];
                   header("Location:index.php?c=vistasAd&a=adminProductosServ");
                   exit;
                }
                $nuevoName = "proSer".date("m-d-y-H-i-s.") . explode("/", $ifPdf)[1];
                $ruta = "PDF/" . $nuevoName;
                $guardadoDB = $this->model->setProSer($servicio,$ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php?c=vistasAd&a=adminProductosServ");
                }
            }
        }else{
            $_SESSION['mensaje']=['danger','Se borrado, ',''];
            header("Location:index.php?c=vistasAd&a=adminProductosServ");
        }
    }
    public function removeProServ($id,$ruta){
        $borrado = $this->model->removeProServ($id);
        $servicio = $this->model->getSerPro($id);
        if($borrado){
            $pdfBorrado = $this->acciones->borrarImg($ruta);
            if($pdfBorrado){
            $_SESSION['mensaje']=['info','Se borrado, ',"$servicio[0]"];
            header("Location:index.php?c=vistasAd&a=adminProductosServ");
            }else{
            $_SESSION['mensaje']=['warning','Algo malo paso intentalo mas tarde!',"."];
            header("Location:index.php?c=vistasAd&a=adminProductosServ");
            }
        }else{
        $_SESSION['mensaje']=['warning','Algo malo paso intentalo mas tarde!',"."];
        header("Location:index.php?c=vistasAd&a=adminProductosServ");
        }
    }
    public function postFabricantes()
    {
        if(isset($_POST['agregar'])){
          $empresa = $_POST['empresa'];
          $rol = $_POST['rol'];
          $nombre = $_POST['nombre'];
          $telefono = $_POST['numero'];
          $correo = $_POST['correo'];

            echo $empresa;
            $pdf = $_FILES['pdf'];
          $ifPdf = $_FILES['pdf']['type'];
          $tmpPdf = $_FILES['pdf']['tmp_name'];
            if(!empty($pdf)){
                  
                if(!(strpos($ifPdf,'pdf'))){
                    $_SESSION['mensaje']=["danger","El archivo selecionado no es, ","PDF"];
                    header("Location:index.php?c=vistas&a=fabricantes");
                    exit;
                }
                $hora = date("H-i-s.");
                $nuevoName = "fabr".$hora.explode("/", $ifPdf)[1];
                $ruta = "PDF/" . $nuevoName;
                $guardadoDB = $this->model->setFabricante($empresa,$rol,$nombre,$telefono,$correo,$ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php");
                }
            }
        }
    }
    public function postPostular(){
        if(isset($_POST['postular'])){
          $puesto = $_POST['puesto'];
          $nombre = $_POST['nombre'];
          $telefono = $_POST['numero'];
          $correo = $_POST['correo'];
          $pdf = $_FILES['cv'];
          $ifPdf = $_FILES['cv']['type'];
          $tmpPdf = $_FILES['cv']['tmp_name'];
            if(!empty($pdf)){
                $hora = date("H-i-s.");
                $nuevoName = "colab".$hora.explode("/", $ifPdf)[1];
                $ruta = "PDF/" . $nuevoName;
                $guardadoDB = $this->model->setPostular($puesto,$nombre,$correo,$telefono,$ruta);
                if($guardadoDB){
                    move_uploaded_file($tmpPdf,$ruta);
                    header("Location:index.php");
                }
            }
        }else{
            
            header("Location:index.php?c=vistas&a=vacantes");                                
        }
    }
    public function removePostulado($id,$ruta){
        $borrado = $this->model->removePostulante($id);
        $pdfBorrado = $this->acciones->borrarImg($ruta);
        if($borrado || $pdfBorrado){
            $_SESSION['mensaje']=['info','Se borrado, ','Persona interesada'];
            header("Location:index.php?c=vistasAd&a=postuladosAd");
        }else{
            $_SESSION['mensaje']=['warning','Algo malo paso intentalo más tarde!',"."];
            header("Location:index.php?c=vistasAd&a=postuladosAd");
        }
    }
    public function activarMayorista($email,$hash){
      if (isset($_POST['cambioMayorista'])) {
        $giro = $_POST["giro"];
        $direccion = $_POST["direccion"];
        $cambio = $this->model->cambioMayorista($hash, $giro, $direccion);//Hacer el cambio de activo ha inactivo 
        $camb =  $this->acciones->cambioMayorista($email,$hash);
        if ($cambio||$camb) {
                $_SESSION['mensajeActivado'] = ["success", "Hemos enviado un correo de activación, has click en el enlace enviado"];
                header("Location:index.php?c=vistas&a=catalogos");   
            }else{
                $_SESSION['mensajeActivado'] = ["danger", "Algo malo paso intentalo más tarde!"];
                header("Location:index.php?c=vistas&a=catalogos");
            }
          }else{
        $_SESSION['mensajeActivado'] = ["danger", "Algo malo paso intentalo más tarde!"];
        header("Location:index.php?c=vistas&a=catalogos");
      }
    }
}
