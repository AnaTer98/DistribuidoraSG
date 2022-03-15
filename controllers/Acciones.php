<?php
include_once'models/modeloInicio.php';
class ControllerAcciones{
    private $modelo;
    function __construct(){
        $this->modelo = new ModeloInicio();
    }
    public function enviarCorreo($user, $email, $hash)
    {

        $titulo = "Registro | Verificación";
        $mensaje = '

    Gracias por registrarte!
    Tu cuenta ha sido creada, activala utilizando el enlace en la parte inferior.
    +----------------------------+
    Nombre:' . $user . '
    Corrreo:' . $email . '
    +----------------------------+
    Por favor has clic en este enlace para activar tu cuenta :
    http://distribuidora.com/index.php?c=acciones&a=activar&id='.$user.'&r='.$hash.' 
    
    ';
        $header = "From:administracion@distribuidorasg.com.mx" . "\r\n";
      $enviado =  mail($email, $titulo, $mensaje, $header);
      return $enviado;
    }
    public function borrarImg($rutas) {
        $ruta = (string)$rutas;
        $borrado = unlink($ruta);
        return $borrado;
    }



    public function activar($nombre,$hash){
       $registrad = $this->modelo->existeCorreo($nombre,$hash);
       if(!empty($registrad)){
        var_dump($registrad);
           echo "vamos chidos";
          # $this->modelo->activandoCorreo((string)$hash,(string)$nombre);
           #redireccionar al formulario de ingreso he ingresar un mensaje
          # header("Location:index.php?c=vistas&a=ingresar");
       }else{
           echo "Vamos mal ";
       }
       
        #en caso de que sea verdadero el hash 
        
    }
    public function cerrar(){
      session_unset();
      header("Location:index.php?c=vistas&a=index");
    }
   
}
