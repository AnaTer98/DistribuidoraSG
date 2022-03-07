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
                    header('Location:index.php?c=vistas&a=ingresar');
                   }
                }
            }
        } else { #else de si existe el formulario
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
                if (!(strpos($extension, 'jpg' || strpos($extension, 'png' || strpos($extension, 'gif'))))) { #$extension verificar FALTA CHECAR BIEN QUE ONDA
                    #en caso de que sea falso y no acepte este tipo de extension
                    header("Location:index.php?c=vistas&a=adminCarrusel");
                }
                $nuevoName = date("m-d-y-H-i-s.") . explode("/", $extension)[1];

                $ruta = "images/" . $nuevoName;

                $guardadoDB = $this->model->setCarrusel($ruta, $descripcion);
                if ($guardadoDB) {
                    try {
                        move_uploaded_file($temp, $ruta);
                        header("Location:index.php?c=vistas&a=adminCarrusel");
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
            $_SESSION['mensaje'] = [" Un elemento del Carrusel ha sido,", "warning"];
            header("Location:index.php?c=vistas&a=adminCarrusel");
        } else {
            #lo mismo pero con mensaje de que algo salio mal 
            # $mensaje="Algo salio mal";
            $_SESSION['mensaje'] = ["No se ha borrado intentelo de nuevo", "error"];
            header("Location:index.php?c=vistas&a=adminCarrusel");
        }
    }
}
