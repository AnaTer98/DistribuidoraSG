<?php


include_once '../Modelado/database.php';
$baseConec = new Database();
$funcionEnlace = $baseConec->conexion();

session_start();

if(isset($_POST['registro'])){
    $nombre = $_POST['nombreUser'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['passwords'];
    $numero = $_POST['number'];
    $pass = md5($contrasena);
    $tipo = "normal";
    //echo 'Aqui estoy'.$nombre.$correo.$contrasena.$numero.$tipo;
   
    $consulta = "INSERT INTO usuarios(nombre,correo,password,tipoUser)VALUES('$nombre','$correo','$pass','$tipo');";
  

    

   
    try{
    $resultado =$funcionEnlace->prepare($consulta)->execute();
  
  
    $_SESSION['Usuario']='$nombre';
    header('Location: ../index.php');


    }catch(PDOException $r){
        echo $r;
    }
}else{
    echo 'algo fallo';
}



?>