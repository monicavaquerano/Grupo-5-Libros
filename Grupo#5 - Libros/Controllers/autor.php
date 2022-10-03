<?php
    class autorController{
        
        public function __construct(){
            require_once "Models/autorModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_autor(){
            //Instacia de mi clase autor en el Modelo
            $objAutor = new autor_Model();
            $data["autor"] = $objAutor->get_autor();

            require_once "Views/autor/autor_mostrar.php";
        }

        //para agregar datos a la base
        //PARA IR A LA VISTA (VIEWS)
 
        public function nuevo(){
            require_once "Models/paisModel.php";

            $objPais = new pais_Model();
            $retornado = $objPais->get_pais();

            require_once "Views/autor/autor_nuevo.php";
        }

        //PARA USAR EL MODELO (MODELS)
        public function guardar(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $sexo = $_POST['sexo'];
            $pais_id = $_POST['pais'];
           
            $objAutor = new autor_Model();
            $objAutor->insertar($nombre, $apellido, $fecha_nacimiento, $sexo, $pais_id);

            //AL DAR CLIC EN UARDAR ME ENVIARA A LA VISTA INDEX
            $this->index_autor();
        }

        //--------------

        //funciones para actualizar datos a la base
        public function modificar($id){
            $objAutor = new autor_Model();
            
            $data["autor_id"] = $id;
            $data["autor"] = $objAutor->get_unicaFila($id);
            
            require_once "Models/paisModel.php";

            $objPais = new pais_Model();
            $retornado = $objPais->get_pais();

            require_once "Views/autor/autor_modificar.php";
        }

        public function actualizar(){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $sexo = $_POST['sexo'];
            $pais_id=$_POST['pais'];
           
            $objAutor=new autor_Model();
            $objAutor->modificar($id, $nombre, $apellido, $fecha_nacimiento, $sexo, $pais_id);
            
            $this->index_autor();
        }
        
        //eliminar
        public function eliminar($id){
            $objAutor=new autor_Model();
            $objAutor->eliminar($id);

            $this->index_autor();
        }
        
    }
?>