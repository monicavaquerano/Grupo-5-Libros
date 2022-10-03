<?php

    class busqueda_Model{
        private $db;
        private $libro;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->libro = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "libro_busqueda"
        public function get_busqueda(){
            if(isset($_POST['buscar'])){
                $filtervalues = $_POST['buscar'];
                $query = "SELECT L.libro_id, L.titulo, A.nombre AS aapellido, E.nombre AS enombre, P.nombre AS pnombre, 
                L.fecha_publicacion, L.edicion, G.nombre AS gnombre, I.nombre AS inombre, PO.tipo AS potipo, L.paginas, L.isbn, L.notas  
                FROM libro AS L
                INNER JOIN autor AS A ON A.autor_id = L.autor_id
                INNER JOIN editorial AS E ON E.editorial_id = L.editorial_id
                INNER JOIN pais AS P ON P.pais_id = L.pais_id
                INNER JOIN genero AS G ON G.genero_id = L.genero_id
                INNER JOIN idioma AS I ON I.idioma_id = L.idioma_id
                INNER JOIN portada AS PO ON PO.portada_id = L.portada_id

                WHERE titulo
                LIKE '%$filtervalues%' ";

                $resultado = $this->db->query($query);

                while ($row = $resultado->fetch_assoc()){
                    $this->libro[] = $row;
                }
                return $this->libro;

            }
        }
    }
  
?>