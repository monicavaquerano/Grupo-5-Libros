<?php

    class autor_Model{
        private $db;
        private $autor;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->autor = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "autor_mostrar"
        public function get_autor(){
            $query = "SELECT A.autor_id, A.nombre AS nautor, A.apellido, A.fecha_nacimiento, A.sexo, P.nombre as npais 
            FROM autor AS A
            INNER JOIN pais AS P ON A.pais_id = P.pais_id";
            //$query = "SELECT * FROM autor";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->autor[] = $row;
            }
            return $this->autor;
        }

        //funcion para insertar datos
     
        public function insertar($nombre, $apellido, $fecha_nacimiento, $sexo, $pais_id){
            $resultado = $this->db->query("INSERT INTO autor (nombre, apellido, fecha_nacimiento, sexo, pais_id)
            VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$sexo', '$pais_id')");
        }

        //funcion para actualizar
        public function modificar($id, $nombre, $apellido, $fecha_nacimiento, $sexo, $pais_id){
            $resultado=$this->db->query("UPDATE autor SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo', pais_id='$pais_id' WHERE autor_id='$id'");
            return $resultado;
        }

        //funcion para eliminar
        public function eliminar($id){
            $resultado=$this->db->query("DELETE FROM autor WHERE autor_id='$id'");
        }


        //funcion adicional
        public function get_unicaFila($id){
            $query = "SELECT * FROM autor WHERE autor_id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        
        }


    }




    
?>