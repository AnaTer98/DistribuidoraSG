<?php
include_once "models/modeloInicio.php";
class ControllerFormularios
{
    private $model;
    function __construct()
    {

        $this->model = new ModeloInicio();
    }
    public function get_Carrusel()
    {
        return $this->model->getCarrusel();
    }

    public function registrarUsuario(){
        $mensajes = array();
        if(isset($_POST["registro"])){
            $nombreUser = $_POST["nombreUser"];
            $telefono = $_POST["numeroTel"];

            $correo = $_POST["correoUser"];
            $correoCon = $_POST["correoUserConfirm"];

            $contrasena = $_POST["passUser"];
            $contrasenaCon = $_POST["passUserConfirm"];   
            if(!($correo==$correoCon)){
                array_push($mensajes,"Los correos no coinciden ");
            header('location:index.php?c=vistas&a=registrar');
            }
            if(!($contrasena==$contrasenaCon)){
                array_push($mensajes,"Las contraseñas no coinsiden.");
                header('location:./index.php?c=vistas&a=registrar');
            }
           
       
        }else{
            echo "Error al enviar datos intetelo de nuevo ";
        
        }

        
    }

    public function postCarrusel()
    {

        if (isset($_POST['Guardar'])) {
            $descripcion = $_POST['descripcion'];
            $imagen = $_FILES['imagen']['name'];
            if (isset($imagen)) {
                $extension = $_FILES['imagen']['type'];
                #Aun queda por resolver que es este objeto
                $temp = $_FILES['imagen']['tmp_name'];
                #Solo haceptara estos formatos 
                if (!((strpos($extension, 'jpg') || strpos($extension, 'png') || strpos($extension, 'jpeg')))) {
                    #Aqui sera un mensaje de error en caso de que sea falso de
                    #Recargar la pagina 
                    header('location:../index.php');
                } else {
                    #explode es como split en javascript
                    $nuevoName = date("m-d-y-H-i-s") . '.' . explode('/', $extension)[1];
                    $carrusel = $this->model->setCarrusel('./images/' . $nuevoName, $descripcion);
                    echo 'aqui pero no se ';

                    #Se llamara el modelo para registrar en la base de datos 
                    #Si se realizo correctamente la consulta 
                    if ($carrusel == true) {
                        try {
                            #Recargamos la pagina  
                            move_uploaded_file($temp, './images/' . $nuevoName);
                            header('location:administrador/'); #Por lo mientras
                        } catch (Exception $th) {
                            echo $th;
                        }
                    } else {
                        echo 'Aun no jala ';
                    }
                }
            }
        }
    }
}
