<?php
 include('datosConexion.php');
    #Se ara cambio de calse para la conexion a la base de datos 
    class Database{
       
        function conexion(){
            try{
           $conn = new PDO("mysql:host=".SERVER.";dbname=".DBNAME,USER,PASSWORD);     
           return $conn;
            }catch(PDOException $error){
                die("El error es :".$error->getMessage());

            }


        }


        
    }
?>