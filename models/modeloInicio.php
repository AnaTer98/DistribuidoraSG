<?php
require_once("database/database.php");
class modeloInicio{
public $based;
public $getResultado;
public $carrusel;
    function __construct(){
        $this->based = new Database();
        $this->based = $this->based->conn;
    }

    public function getCarrusel(){ 
        $stringSql= "SELECT * FROM carrusel";
       # $this->getResultado = $this->based->query($stringSql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
       # $this->getResultado = $this->getResultado->execute();
    $resul = $this->based->prepare($stringSql);
     $resul->execute();
    $resultado= $resul->fetchAll();
        return $resultado;
    }
    public function eliminarCarrusel($id){
        echo "si pasa por aqui";
        $sql="DELETE FROM carrusel WHERE carrusel . id='$id'";
        $re = $this->based->prepare($sql);
        $re->execute();
        return $re;
    }

    public function setCarrusel($ruta,$descripcion){ 
       $sql="INSERT INTO carrusel (id, rutaImg, descripcion) VALUES (NULL, '$ruta', '$descripcion');";    
       $resul = $this->based->prepare($sql);
        $resul->execute();
        return $resul;
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