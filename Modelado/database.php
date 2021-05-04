<?php

//Se  cambio de clase para la conexion a la base de datos 
class database{
   #Datos para realizar  la conexion a la base de datos
 private $host;
 private $user;
 private $password;
 private $dbName;

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password ='';
        $this->dbName = 'distribuidora';


    }

    function conexion(){
        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
            $conn = new PDO("mysql:host=" . $this->host. ";dbname=" . $this->dbName,$this->user, $this->password,$options);

            return $conn;
        
        } catch (PDOException $error) {
            die("El error es :" . $error->getMessage());
        }
    }
}
?>