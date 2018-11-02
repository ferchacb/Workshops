<?php
    require "conexion.php";
    class Estudiante{
        public $nombre;
        public $cedula;
        public $edad;
        public $correo;
        function __construct($nombre,$cedula,$edad,$correo){
            $this->nombre = $nombre;
            $this->cedula = $cedula;
            $this->edad = $edad;
            $this->correo = $correo;
        }
        
        function insert(){
            $conexion = conexion();
            $sql = "INSERT INTO users VALUES('$this->nombre', '$this->cedula', '$this->edad', '$this->correo')";
            $conexion->query($sql);
            echo "Nuevo Estudiante Agregado!";
        }
    }
?>