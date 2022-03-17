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
         $this->modelo->activandoCorreo($registrad['hash'],$registrad['correo']);
           #redireccionar al formulario de ingreso he ingresar un mensaje
           $_SESSION['mensajeActivado']=["success","Tu correo electronico ha sido activado ahora puedes ingresar a nuestra pagina "];
           header("Location:index.php?c=vistas&a=ingresar");
       }else{
           echo "hA ocurrido algo mal prueba de nuevo mas tarde";
       }
       
        #en caso de que sea verdadero el hash 
        
    }
  
    public function cerrar(){
      session_unset();
      header("Location:index.php?c=vistas&a=index");
    }
   
}
