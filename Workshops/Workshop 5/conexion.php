<?php
    function conexion(){
        try{
            $conexion = new PDO("mysql:host=localhost;dbname=userdb","root","");
            return $conexion;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            die();  
        }
    }
?>