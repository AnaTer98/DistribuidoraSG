<?php
session_start();
include_once 'models/modeloInicio.php';
class ControllerAcciones
{
  public $modelo;

  function __construct()
  {
    $this->modelo = new modeloInicio();
  }
  public function enviarCorreo($user, $email, $hash)
  {
    $para = $email;
    $titulo = "Registro | Verificación";
    $mensaje = '

    Gracias por registrarte!
    Tu cuenta ha sido creada, activala utilizando el enlace en la parte inferior.
    +----------------------------+
    Corrreo:' . $para . '
    +----------------------------+
    Por favor has clic en este enlace para activar tu cuenta :
    http://distribuidorasg.com.mx/index.php?c=acciones&a=activar&id=' . $para . '&r=' . $hash . ' 
    
    ';
    $header = "From:administracion@distribuidorasg.com.mx" . "\r\n";
    $enviado =  mail($para, $titulo, $mensaje, $header);
    return $enviado;
  }

  public function cambioMayorista($email,$hash)
  {
    $para = $email;
    $titulo = "Activación | Verificación";
    $mensaje = '
  Gracias por confiar en nosotros.
  Tu cuenta ha sido creada, actualizada utilizando el enlace en la parte inferior.
  +----------------------------+
  Corrreo:' . $para . '
  +----------------------------+
  Por favor has clic en este enlace para actualizar tu cuenta a mayorista :
  http://distribuidorasg.com.mx/index.php?c=acciones&a=activarMayor&id='. $hash.'&r='.$para.' 
  
  ';
    $header = "From:administracion@distribuidorasg.com.mx" . "\r\n";
    $enviado =  mail($para, $titulo, $mensaje, $header);
    return $enviado;
  }


  public function borrarImg($rutas)
  {
    $ruta = (string)$rutas;
    $borrado = unlink($ruta);
    return $borrado;
  }



  public function activar($correo, $hash)
  {
    $registrad = $this->modelo->existeCorreo($correo, $hash);
    if (!empty($registrad)) {
      $this->modelo->activandoCorreo($registrad['hash'], $registrad['correo']);
      #redireccionar al formulario de ingreso he ingresar un mensaje
      $_SESSION['mensajeActivado'] = ["success", "Tu correo electronico ha sido activado ahora puedes ingresar a nuestra pagina "];
      header("Location:index.php?c=vistas&a=ingresar");
    } else {
      $_SESSION['mensajeActivado'] = ["danger", "Tu correo electronico no se a logrado activar, intentalo mas tarde"];
      header("Location:index.php?c=vistas&a=ingresar");
    }

    #en caso de que sea verdadero el hash 

  }
  public function activarMayor($hash, $correo)
  {
    try{
   # echo ("UPDATE usuarios SET activo = 1,rol='mayoreo' WHERE  hash='$hash' AND correo = '$correo'");
     $modificado = $this->modelo->activandoMayor($correo, $hash);

    }catch(PDOException $e){
      echo($e);
    }
    echo("este es el resultado==>".$modificado);
    if ($modificado != 0) {
      $_SESSION['mensajeActivado'] = ["success", "Felicidades ahora tendras acceso a nuestro catalogo mayorista, disfruta de los venficios"];
      #header("Location:index.php?c=vistas&a=catalogos");
    } else {
      $_SESSION['mensajeActivado'] = ["danger", "Algo salio mal al hacer el cambio intentalo más tarde"];
      # header("Location:index.php?c=vistas&a=catalogos");
    }
  }

  public function cerrar()
  {
    session_unset();
    header("Location:index.php?c=vistas&a=index");
  }
}
