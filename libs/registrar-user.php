<?php

session_start();

include_once '../Modelado/database.php';
$baseConec = new Database();
$funcionEnlace = $baseConec->conexion();

if(isset($_POST['registro'])){
    $nombre = $_POST['nombreUser'];
    $correo = $_POST['correoUser'];
    $contrasena = $_POST['passUser'];
    $numero = $_POST['numeroTel'];
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