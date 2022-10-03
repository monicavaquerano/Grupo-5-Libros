<?php

    class libro_Model{
        private $db;
        private $libro;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->libro = array();
        }

        //FUNCIÓN PARA MOSTRAR LA TABLA DE LA VISTA "libro_mostrar"
        public function get_libro(){
            $query = "SELECT L.libro_id, L.titulo, concat(A.nombre, ' ', A.apellido) AS aapellido, E.nombre AS enombre, P.nombre AS pnombre, 
            L.fecha_publicacion, L.edicion, G.nombre AS gnombre, I.nombre AS inombre, PO.tipo AS potipo, L.paginas, L.isbn, L.notas  
            FROM libro AS L
            INNER JOIN autor AS A ON A.autor_id = L.autor_id
            INNER JOIN editorial AS E ON E.editorial_id = L.editorial_id
            INNER JOIN pais AS P ON P.pais_id = L.pais_id
            INNER JOIN genero AS G ON G.genero_id = L.genero_id
            INNER JOIN idioma AS I ON I.idioma_id = L.idioma_id
            INNER JOIN portada AS PO ON PO.portada_id = L.portada_id
            ORDER BY L.titulo
            ";
            $resultado = $this->db->query($query);

            while ($row = $resultado->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }

        //funcion para insertar datos
     
        public function insertar($titulo, $autor_id, $editorial_id, $pais_id, $fecha_publicacion, $edicion, $genero_id, $idioma_id, $portada_id, $paginas, $isbn, $notas){
            $resultado = $this->db->query("INSERT INTO libro (titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas)
            VALUES ('$titulo', '$autor_id', '$editorial_id', '$pais_id', '$fecha_publicacion', '$edicion', '$genero_id', '$idioma_id', '$portada_id', '$paginas', '$isbn', '$notas')");
        }

        //funcion para actualizar
        public function modificar($id, $titulo, $autor_id, $editorial_id, $pais_id, $fecha_publicacion, $edicion, $genero_id, $idioma_id, $portada_id, $paginas, $isbn, $notas){
            $resultado=$this->db->query("UPDATE libro SET titulo='$titulo', autor_id='$autor_id', editorial_id='$editorial_id', pais_id='$pais_id', fecha_publicacion='$fecha_publicacion', edicion='$edicion', genero_id='$genero_id', idioma_id='$idioma_id', portada_id='$portada_id', paginas='$paginas', isbn='$isbn', notas='$notas' WHERE libro_id='$id'");
            return $resultado;
        }

        //funcion para eliminar
        public function eliminar($id){
            $resultado=$this->db->query("DELETE FROM libro WHERE libro_id='$id'");
        }


        //funcion adicional
        public function get_unicaFila($id){
            $query = "SELECT * FROM libro WHERE libro_id='$id' LIMIT 1";
            $resultado = $this->db->query($query);
            $row = $resultado->fetch_assoc();

            return $row;
        
        }
    }  
?>