<?php
    class generoController{
        
        public function __construct(){
            require_once "Models/generoModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_genero(){
            //Instacia de mi clase genero en el Modelo
            $objGenero = new genero_Model();
            $data["genero"] = $objGenero->get_genero();

            require_once "Views/genero/genero_mostrar.php";
        }

        //para agregar datos a la base
        //PARA IR A LA VISTA (VIEWS)
 
        public function nuevo(){
            require_once "Views/genero/genero_nuevo.php";
        }

        //PARA USAR EL MODELO (MODELS)
        public function guardar(){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
           
            $objGenero = new genero_Model();
            $objGenero->insertar($nombre, $descripcion);

            //AL DAR CLIC EN UARDAR ME ENVIARA A LA VISTA INDEX
            $this->index_genero();
        }

        //--------------

        //funciones para actualizar datos a la base
        public function modificar($id){
            $objGenero = new genero_Model();
            
            $data["genero_id"] = $id;
            $data["genero"] = $objGenero->get_unicaFila($id);

            require_once "Views/genero/genero_modificar.php";
        }

        public function actualizar(){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
           
            $objGenero=new genero_Model();
            $objGenero->modificar($id, $nombre, $descripcion);
            
            $this->index_genero();
        }
        
        //eliminar
        public function eliminar($id){
            $objGenero=new genero_Model();
            $objGenero->eliminar($id);

            $this->index_genero();
        }
        
    }
?>