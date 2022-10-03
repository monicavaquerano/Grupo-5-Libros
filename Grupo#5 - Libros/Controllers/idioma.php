<?php
    class idiomaController{
        
        public function __construct(){
            require_once "Models/idiomaModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_idioma(){
            //Instacia de mi clase idioma en el Modelo
            $objIdioma = new idioma_Model();
            $data["idioma"] = $objIdioma->get_idioma();

            require_once "Views/idioma/idioma_mostrar.php";
        }

        //para agregar datos a la base
        //PARA IR A LA VISTA (VIEWS)
 
        public function nuevo(){
            require_once "Views/idioma/idioma_nuevo.php";
        }

        //PARA USAR EL MODELO (MODELS)
        public function guardar(){
            $nombre = $_POST['nombre'];
           
            $objIdioma = new idioma_Model();
            $objIdioma->insertar($nombre);

            //AL DAR CLIC EN UARDAR ME ENVIARA A LA VISTA INDEX
            $this->index_idioma();
        }

        //--------------

        //funciones para actualizar datos a la base
        public function modificar($id){
            $objIdioma = new idioma_Model();
            
            $data["idioma_id"] = $id;
            $data["idioma"] = $objIdioma->get_unicaFila($id);

            require_once "Views/idioma/idioma_modificar.php";
        }

        public function actualizar(){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
           
            $objIdioma=new idioma_Model();
            $objIdioma->modificar($id, $nombre);
            
            $this->index_idioma();
        }
        
        //eliminar
        public function eliminar($id){
            $objIdioma=new idioma_Model();
            $objIdioma->eliminar($id);

            $this->index_idioma();
        }
        
    }
?>