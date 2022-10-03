<?php
    class portadaController{
        
        public function __construct(){
            require_once "Models/portadaModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_portada(){
            //Instacia de mi clase portada en el Modelo
            $objportada = new portada_Model();
            $data["portada"] = $objportada->get_portada();

            require_once "Views/portada/portada_mostrar.php";
        } 
    }
?>