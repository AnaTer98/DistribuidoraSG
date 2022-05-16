<?php

//Se  cambio de clase para la conexion a la base de datos 
class Database{
   #Datos para realizar  la conexion a la base de datos
 private $hostName;
 private $dbname;
 private $user;
 private $pass;
public $conn;

 private $value;
     public function __construct(){
        $this->value = $this->datos();
        $this->hostName = $this->value['host'];                  
        $this->dbname = $this->value['dbname'];        
        $this->user = $this->value['user'];        
        $this->pass = $this->value['password'];      

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
            $this->conn = new PDO("mysql:host=" . $this->hostName. ";dbname=" . $this->dbname,$this->user, $this->pass,$options);    
        } catch (PDOException $error) {
            die("El error es :" . $error->getMessage());
        }          
        
    }

  
    function datos(){
        #$ruta = dirname(__FILE__).'\config\configDb.json';
        $ruta = 'config/configDb.json';
        $conf = file_get_contents($ruta);

        return json_decode($conf,true);

        
    }
}
?>