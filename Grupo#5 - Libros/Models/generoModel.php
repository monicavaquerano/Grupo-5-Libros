<?php

    class genero_Model{
        private $db;
        private $genero;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->genero = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "genero_mostrar"
        public function get_genero(){
            $query = "SELECT * FROM genero";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->genero[] = $row;
            }
            return $this->genero;
        }

        //funcion para insertar datos
     
        public function insertar($nombre, $descripcion){
            $resultado = $this->db->query("INSERT INTO genero (nombre, descripcion)
            VALUES ('$nombre', '$descripcion')");
        }

        //funcion para actualizar
        public function modificar($id, $nombre, $descripcion){
            $resultado=$this->db->query("UPDATE genero SET nombre='$nombre', descripcion='$descripcion' 
            WHERE genero_id='$id'");
            return $resultado;
        }

        //funcion para eliminar
        public function eliminar($id){
            $resultado=$this->db->query("DELETE FROM genero WHERE genero_id='$id'");
        }


        //funcion adicional
        public function get_unicaFila($id){
            $query = "SELECT * FROM genero WHERE genero_id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        
        }


    }




    
?>