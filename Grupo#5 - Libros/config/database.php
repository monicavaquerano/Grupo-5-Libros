<?php
    class Conectar {
        public static function conexion(){
            $conexion = new mysqli(
                "localhost",
                "root",
                "",
                "libro_db"
            );
            return $conexion;
        }
    }
?>