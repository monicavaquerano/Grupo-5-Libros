<?php

    class pais_Model{
        private $db;
        private $pais;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->pais = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "pais_mostrar"
        public function get_pais(){
            $query = "SELECT * FROM pais";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->pais[] = $row;
            }
            return $this->pais;
        }
    }
  
?>