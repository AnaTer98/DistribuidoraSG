<?php
session_start();
require_once("database/database.php");
class modeloInicio
{
    public $based;
    public $getResultado;
    public $carrusel;
    function __construct()
    {
        $this->based = new Database();
        $this->based = $this->based->conn;
    }

    public function getCarrusel()
    {
        $stringSql = "SELECT * FROM carrusel";
        # $this->getResultado = $this->based->query($stringSql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
        # $this->getResultado = $this->getResultado->execute();
        $resul = $this->based->prepare($stringSql);
        $resul->execute();
        $resultado = $resul->fetchAll();
        return $resultado;
    }
    public function eliminarCarrusel($id)
    {
        $ids = (int)$id;
        $sql = "DELETE FROM carrusel WHERE id='$ids';";
        try {
            $re = $this->based->prepare($sql);
            $re->execute();
            return $re;
        } catch (PDOException $e) {
            echo "error==>", $e;
            return false;
        }
    }
    public function setCarrusel($ruta, $descripcion)
    {
        $sql = "INSERT INTO carrusel (id, rutaImg, descripcion) VALUES (NULL, '$ruta', '$descripcion');";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        return $resul;
    }
    public function postVacantes($nameVacante, $descripcion, $ruta)
    {
        $sql = "INSERT INTO vacantess(vacante,descripcion,rutaImg) VALUES('$nameVacante','$descripcion','$ruta');";
        $resultado = $this->based->prepare($sql);
        $resultado->execute();
        return $resultado;
    }
    public function getVacantes()
    {
        $sql = "SELECT * FROM vacantess;";
        $resultados = $this->based->prepare($sql);
        $resultados->execute();
        $res = $resultados->fetchAll();
        return $res;
    }
    public function removeColaborador($id)
    {
        $ids = (int)$id;
        $sql = "DELETE FROM vacantess WHERE id='$ids';";
        try {
            $re = $this->based->prepare($sql);
            $re->execute();
            return $re;
        } catch (PDOException $th) {
            echo "algo salio mal al eliminar el registro";
            //throw $th;
        }
    }
    //Usuarios
    public function getUsuarios()
    {
        $stringSql = "SELECT * FROM usuarios";
        $usuarios = $this->based->query($stringSql);
        $usuarios->execute();
        $us = $usuarios->fetchAll();
        return $us;
    }

    public function verificarCorreo($correo)
    {
        $strinsql = "SELECT correo FROM usuarios WHERE correo='$correo';";
        $this->getResultado = $this->based->prepare($strinsql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        #        $this->getResultado->bindParam(':correo',$correo);
        $this->getResultado->execute();
        $result = $this->getResultado->rowCount();
        return $result;
    } //Rol son tres tipo de usuarios admin, menudeo y mayoreo

    public function registrarUsuario($nombre, $correo, $contrasena, $telefono, $hash, $activo = 0, $rol = "menudeo")
    {
        // $idUser=date("d-t-Y---G-i-s");
        $pass = md5($contrasena);
        $sql = "INSERT INTO usuarios(nombre,correo,contrasena,telefono, rol, hash, activo) VALUES('$nombre','$correo','$pass','$telefono','$rol','$hash','$activo');";
        $resultados = $this->based->prepare($sql);
        $resultados->execute();
        $resultados->rowCount();
        return $resultados;
    }
    public function existeCorreo($nombre, $hash)
    {
        $sqlHash = "SELECT * FROM usuarios WHERE nombre='$nombre' AND hash='$hash' ";
        $existe = $this->based->prepare($sqlHash);
        $existe->execute();
        return $existe->fetch();
    }


    public function activandoCorreo($hash, $correo)
    {
        $sql = "UPDATE usuarios SET activo = 1 WHERE hash='$hash' AND correo='$correo'  ";
        $actualizado = $this->based->prepare($sql);
        $actualizado->execute();
        return $actualizado->columnCount();
    }

    public function getUsuario($correo, $contrasena)
    {#Por el momento solo necesito el nombre y le tipo de ususario 
        $pass = md5($contrasena);
        $sql = "SELECT nombre,rol,activo FROM usuarios WHERE correo='$correo' AND contrasena='$pass';";
        $usuario = $this->based->prepare($sql);
         $usuario->execute();
        $us = $usuario->fetch();
        return $us;  
    }
    public function setPdf($tipo,$ruta){
        $sql = "INSERT INTO pdfs(tipo,rutaPdf) VALUES('$tipo','$ruta');";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        $resul->rowCount();
        return $resul;
    }
    public function getPdfs(){
           $sql = "SELECT * FROM pdfs";
           $result = $this->based->prepare($sql);
           $result->execute();
         $res =   $result->fetchAll(PDO::FETCH_ASSOC);
            return $res;
    }
    public function removeCatalogo($id){
        $ids = $id;
        $sql = "DELETE FROM pdfs WHERE id='$ids';";
        try {
            $re = $this->based->prepare($sql);
            $re->execute();
            return $re;
        } catch (PDOException $th) {
            echo "algo salio mal al eliminar el registro";
            //throw $th;
        }
    }
    public function getPublicaciones(){
        $sql = "SELECT * FROM publicaciones";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        $res = $resul->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function setPublicacion($comentario,$ruta,$fecha){
        $sql = "INSERT INTO publicaciones(comentario,rutaImg,fecha) VALUES('$comentario','$ruta','$fecha');";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        $resul->rowCount();
        return $resul;
    }
    public function removePublicacion($id)
    {
        $sql = "DELETE FROM publicaciones WHERE id = '$id';";
        try {
            $eliminacion = $this->based->prepare($sql);
            $eliminacion->execute();
            return $eliminacion;
        } catch (PDOException $th) {
            echo"Algo ha pasado no se ha eliminado ";
        }
    }
    public function getProductoServ(){
        $sql = "SELECT * FROM servicios";
        $result = $this->based->prepare($sql);
        $result->execute();
        $res = $result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function setCotiza($ruta)
    {
        $sql = "INSERT INTO cotizacion(rutaImg) VALUES('$ruta')";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        $resul->rowCount();
        return $resul;
    }
    public function getCotizador()
    {
        $sql = "SELECT * FROM cotizacion";
        $resul = $this->based->prepare($sql);
        $resul->execute();
        $res = $resul->fetchAll(PDO::FETCH_ASSOC);
        return $res;    
    }
    public function removeCotizador($id)
    {
        $sql = "DELETE FROM cotizacion WHERE id = '$id';" ;
        try {
            $eliminacion = $this->based->prepare($sql);
            $eliminacion->execute();
            return $eliminacion;
        } catch (PDOException $th) {
          return false;
        }
    }
}
