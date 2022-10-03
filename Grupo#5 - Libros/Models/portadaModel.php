<?php

    class portada_Model{
        private $db;
        private $portada;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->portada = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "portada_mostrar"
        public function get_portada(){
            $query = "SELECT * FROM portada";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->portada[] = $row;
            }
            return $this->portada;
        }
    }
  
?>