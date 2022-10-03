<?php
    class editorialController{
        
        public function __construct(){
            require_once "Models/editorialModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_editorial(){
            //Instacia de mi clase editorial en el Modelo
            $objEditorial = new editorial_Model();
            $data["editorial"] = $objEditorial->get_editorial();

            require_once "Views/editorial/editorial_mostrar.php";
        }

        //para agregar datos a la base
        //PARA IR A LA VISTA (VIEWS)
 
        public function nuevo(){

            require_once "Models/paisModel.php";

            $objPais = new pais_Model();
            $retornado = $objPais->get_pais();

            require_once "Views/editorial/editorial_nuevo.php";
        }

        //PARA USAR EL MODELO (MODELS)
        public function guardar(){
            $nombre = $_POST['nombre'];
            $pais_id = $_POST['pais'];
           
            $objEditorial = new editorial_Model();
            $objEditorial->insertar($nombre, $pais_id);

            //AL DAR CLIC EN UARDAR ME ENVIARA A LA VISTA INDEX
            $this->index_editorial();
        }

        //--------------

        //funciones para actualizar datos a la base
        public function modificar($id){
            $objEditorial = new editorial_Model();
            
            $data["editorial_id"] = $id;
            $data["editorial"] = $objEditorial->get_unicaFila($id);

            require_once "Models/paisModel.php";

            $objPais = new pais_Model();
            $retornado = $objPais->get_pais();

            require_once "Views/editorial/editorial_modificar.php";
        }

        public function actualizar(){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $pais_id=$_POST['pais'];
           
            $objEditorial=new editorial_Model();
            $objEditorial->modificar($id, $nombre, $pais_id);
            
            $this->index_editorial();
        }
        
        //eliminar
        public function eliminar($id){
            $objEditorial=new editorial_Model();
            $objEditorial->eliminar($id);

            $this->index_editorial();
        }
        
    }
?>