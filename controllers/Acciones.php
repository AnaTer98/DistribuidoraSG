<?php

class ControllerAcciones
{

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
    http://distribuidora.com/----aqui hace falta algunas cosas 
    
    ';
        $header = "From:administracion@distribuidorasg.com.mx" . "\r\n";
        header("Location:index.php?c=vistas&a=ingresar");
        mail($email, $titulo, $mensaje, $header);
      
    }
    public function borrarImg($rutas) {
        echo "imagen borrar==>".(string)$rutas;
        $ruta = (string)$rutas;
        $borrado = unlink($ruta);
        return $borrado;
    }
   
}
