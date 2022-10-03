<?php

    class editorial_Model{
        private $db;
        private $editorial;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->editorial = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "editorial_mostrar"
        public function get_editorial(){
            $query = "SELECT E.editorial_id, E.nombre as neditorial, P.nombre as npais 
            FROM editorial AS E 
            INNER JOIN pais AS P ON E.pais_id = P.pais_id";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }

        //funcion para insertar datos
     
        public function insertar($nombre, $pais_id){
            $resultado = $this->db->query("INSERT INTO editorial (nombre, pais_id)
            VALUES ('$nombre', '$pais_id')");
        }

        //funcion para actualizar
        public function modificar($id, $nombre, $pais_id){
            $resultado=$this->db->query("UPDATE editorial SET nombre='$nombre', pais_id='$pais_id' WHERE editorial_id='$id'");
            return $resultado;
        }

        //funcion para eliminar
        public function eliminar($id){
            $resultado=$this->db->query("DELETE FROM editorial WHERE editorial_id='$id'");
        }


        //funcion adicional
        public function get_unicaFila($id){
            $query = "SELECT * FROM editorial WHERE editorial_id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        
        }


    }




    
?>