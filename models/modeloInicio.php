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
    


}


?>