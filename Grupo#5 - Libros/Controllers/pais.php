<?php
    class paisController{
        
        public function __construct(){
            require_once "Models/paisModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_pais(){
            //Instacia de mi clase pais en el Modelo
            $objPais = new pais_Model();
            $data["pais"] = $objPais->get_pais();

            require_once "Views/pais/pais_mostrar.php";
        } 
    }
?>