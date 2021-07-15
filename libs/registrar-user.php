<?php

session_start();

include_once '../Modelado/database.php';
$baseConec = new Database();
$funcionEnlace = $baseConec->conexion();

class RegistrarUser{
    public $nombre ;
    public $numero ;

    public $correo ;
    public $confCorreo ;

    public $contrasena ;
    public $confirmPass ;




    function __construct(string $nombre){
       $this.nombre = $_POST['nombreUser'];
       $this.numero = $_POST['numeroTel'];
       $this.correo = $_POST['correcorreoUser'];
       $this.confCorreo= $_POST['correoUserConfirm'];
       $this.constrasena= $_POST['passUser'];
       $this.confirmPass= $_POST['passUserConfirm'];
    }
    
    function registrar(){



    }





}









if(isset($_POST['registro'])){

    
if($correo != $confCorreo){
    echo "Los corre no coincide ";
}else{
$queryConsulta = "SELECT correo FROM usuarios where correo='$correo'";
$res = $funcionEnlace->prepare($queryConsulta);
$res->execute();

//header('Location: ../views/logins/view-ingresar-user.php');

}
    $pass = md5($contrasena);
    $tipo = "normal";
   


   // echo 'Aqui estoy'.$nombre.$correo.$contrasena.$numero.$tipo;
   
    $consulta = "INSERT INTO usuarios(nombre,correo,password,tipoUser)VALUES('$nombre','$correo','$pass','$tipo');";
  

    
//echo $consulta;
   
    try{
    $resultado = $funcionEnlace->prepare($consulta)->execute();//Aqui tenia el error
  
  
    $_SESSION['Usuario']=$nombre;
    header('Location: ../index.php');


    }catch(PDOException $r){
        echo $r;
    }
}else{
    echo 'algo fallo';
}



?>