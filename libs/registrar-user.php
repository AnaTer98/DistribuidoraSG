<?php

session_start();

include_once '../Modelado/database.php';
$baseConec = new Database();
$funcionEnlace = $baseConec->conexion();

if(isset($_POST['registro'])){
    $nombre = $_POST['nombreUser'];
    $numero = $_POST['numeroTel'];

    $correo = $_POST['correoUser'];
    $confCorreo = $_POST['correoUserConfirm'];

    $contrasena = $_POST['passUser'];
    $confirmPass = $_POST['passUserConfirm'];

    
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
  
  
    //$_SESSION['Usuario']=$nombre;
    header('Location: ../index.php');


    }catch(PDOException $r){
        echo $r;
    }
}else{
    echo 'algo fallo';
}



?>