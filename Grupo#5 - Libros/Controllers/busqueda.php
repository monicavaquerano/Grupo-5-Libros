<?php
    class busquedaController{
        
        public function __construct(){
            require_once "Models/busquedaModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_busqueda(){
            //Instacia de mi clase busqueda en el Modelo
            $objLibro = new busqueda_Model();
            $data["libro"] = $objLibro->get_busqueda();

            require_once "Views/libro/libro_buscar.php";
        } 
    }
?>