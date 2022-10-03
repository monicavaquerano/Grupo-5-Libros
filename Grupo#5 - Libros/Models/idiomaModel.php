<?php

    class idioma_Model{
        private $db;
        private $idioma;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->idioma = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "idioma_mostrar"
        public function get_idioma(){
            $query = "SELECT * FROM idioma";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->idioma[] = $row;
            }
            return $this->idioma;
        }

        //funcion para insertar datos
     
        public function insertar($nombre){
            $resultado = $this->db->query("INSERT INTO idioma (nombre)
            VALUES ('$nombre')");
        }

        //funcion para actualizar
        public function modificar($id, $nombre){
            $resultado=$this->db->query("UPDATE idioma SET nombre='$nombre' WHERE idioma_id='$id'");
            return $resultado;
        }

        //funcion para eliminar
        public function eliminar($id){
            $resultado=$this->db->query("DELETE FROM idioma WHERE idioma_id='$id'");
        }


        //funcion adicional
        public function get_unicaFila($id){
            $query = "SELECT * FROM idioma WHERE idioma_id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        
        }


    }




    
?>