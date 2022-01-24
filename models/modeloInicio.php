<?php
require_once("database/database.php");
class modeloInicio{
public $based;
public $getResultado;
    function __construct(){
        $this->based = new Database();
        $this->based = $this->based->conn;
    }

    public function getCarrusel(){ 
        $stringSql= "SELECT * FROM carrusel";
        $this->getResultado = $this->based->prepare($stringSql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
        
        $this->getResultado->fetchAll();
        return $this->getResultado;
    }
    public function setCarrusel(){ 

    }
    public function verificarCorreo($correo){ 
        $strinsql="SELECT correo FROM usuarios WHERE correo='$correo';";
        $this->getResultado = $this->based->prepare($strinsql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
#        $this->getResultado->bindParam(':correo',$correo);
        $this->getResultado->execute();
        $result = $this->getResultado->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }//Rol son tres tipo de usuarios admin, menudeo y mayoreo

    public function registrarUsuario($nombre,$correo,$contrasena,$telefono,$activo=0,$rol="menudeo"){
       // $idUser=date("d-t-Y---G-i-s");
        $hash=md5(rand(0,1000));
        $sql = "INSERT INTO usuarios(nombre,correo,contrasena,telefono, rol, hash, activo) VALUES('$nombre','$correo','$contrasena','$telefono','$rol','$hash','$activo');";
       // $sql = "INSERT INTO usuarios(id,nombre,correo,contrasena,telefono, rol, hash, activo) VALUES('user-12-22-12','','$correo','$contrasena','$telefono','$rol','$hash','$activo');";
        
        echo "Estoy en el modelo".$sql;
        $resultados = $this->based->query($sql);
        $resultados->execute();
        return $resultados;

    }
    


}


?>