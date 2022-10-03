<?php
    class libroController{
        
        public function __construct(){
            require_once "Models/libroModel.php";
        }

        //PARA VER LA TABLA(UNIENDO VIEW & MODELS)
        public function index_libro(){
            //Instacia de mi clase libro en el Modelo
            $objLibro = new libro_Model();
            $data["libro"] = $objLibro->get_libro();

            require_once "Views/libro/libro_mostrar.php";
        }

        //para agregar datos a la base
        //PARA IR A LA VISTA (VIEWS)
 
        public function nuevo(){
            
            require_once "Models/autorModel.php";
            $objAutor = new autor_Model();
            $retornando_autor = $objAutor->get_autor();

            require_once "Models/editorialModel.php";
            $objEditorial = new editorial_Model();
            $retornando_editorial = $objEditorial->get_editorial();

            require_once "Models/paisModel.php";
            $objPais = new pais_Model();
            $retornando_pais = $objPais->get_pais();
            
            require_once "Models/generoModel.php";
            $objGenero = new genero_Model();
            $retornando_genero = $objGenero->get_genero();
            
            require_once "Models/idiomaModel.php";
            $objIdioma = new idioma_Model();
            $retornando_idioma = $objIdioma->get_idioma();

            require_once "Models/portadaModel.php";
            $objPortada = new portada_Model();
            $retornando_portada = $objPortada->get_portada();

            require_once "Views/libro/libro_nuevo.php";
        }

        //PARA USAR EL MODELO (MODELS)
        //PARA USAR EL MODELO (MODELS)
        public function guardar(){
            $titulo = $_POST['titulo'];
            $autor_id = $_POST['autor'];
            $editorial_id = $_POST['editorial'];
            $pais_id = $_POST['pais'];
            $fecha_publicacion = $_POST['fecha_publicacion'];
            $edicion = $_POST['edicion'];
            $genero_id = $_POST['genero'];
            $idioma_id = $_POST['idioma'];
            $portada_id = $_POST['portada'];
            $paginas = $_POST['paginas'];
            $isbn = $_POST['isbn'];
            $notas = $_POST['notas'];
           
            $objLibro = new libro_Model();
            $objLibro->insertar($titulo, $autor_id, $editorial_id, $pais_id, $fecha_publicacion, $edicion, $genero_id, $idioma_id, $portada_id, $paginas, $isbn, $notas);

            //AL DAR CLIC EN UARDAR ME ENVIARA A LA VISTA INDEX
            $this->index_libro();
        }

        //--------------

        //funciones para actualizar datos a la base
        public function modificar($id){
            $objLibro = new libro_Model();
            
            $data["libro_id"] = $id;
            $data["libro"] = $objLibro->get_unicaFila($id);

            require_once "Models/autorModel.php";
            $objAutor = new autor_Model();
            $retornando_autor = $objAutor->get_autor();

            require_once "Models/editorialModel.php";
            $objEditorial = new editorial_Model();
            $retornando_editorial = $objEditorial->get_editorial();

            require_once "Models/paisModel.php";
            $objPais = new pais_Model();
            $retornando_pais = $objPais->get_pais();
            
            require_once "Models/generoModel.php";
            $objGenero = new genero_Model();
            $retornando_genero = $objGenero->get_genero();
            
            require_once "Models/idiomaModel.php";
            $objIdioma = new idioma_Model();
            $retornando_idioma = $objIdioma->get_idioma();

            require_once "Models/portadaModel.php";
            $objPortada = new portada_Model();
            $retornando_portada = $objPortada->get_portada();

            require_once "Views/libro/libro_modificar.php";
        }

        public function actualizar(){
            $id=$_POST['id'];
            $titulo = $_POST['titulo'];
            $autor_id = $_POST['autor'];
            $editorial_id = $_POST['editorial'];
            $pais_id = $_POST['pais'];
            $fecha_publicacion = $_POST['fecha_publicacion'];
            $edicion = $_POST['edicion'];
            $genero_id = $_POST['genero'];
            $idioma_id = $_POST['idioma'];
            $portada_id = $_POST['portada'];
            $paginas = $_POST['paginas'];
            $isbn = $_POST['isbn'];
            $notas = $_POST['notas'];
           
            $objLibro=new libro_Model();
            $objLibro->modificar($id, $titulo, $autor_id, $editorial_id, $pais_id, $fecha_publicacion, $edicion, $genero_id, $idioma_id, $portada_id, $paginas, $isbn, $notas);
            
            $this->index_libro();
        }
        
        //eliminar
        public function eliminar($id){
            $objLibro=new libro_Model();
            $objLibro->eliminar($id);

            $this->index_libro();
        }
        
    }
?>