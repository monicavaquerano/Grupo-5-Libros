<!DOCTYPE html>
<html>
<head>
        <title>Busqueda de libros</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

<ul>
            <li><a href="index.php">INICIO</a></li>
            <li><a href="libroMtto.php">LIBRO</a></li>
            <li><a href="autorMtto.php">AUTOR</a></li>
            <li><a href="editorialMtto.php">EDITORIAL</a></li>
            <li><a href="generoMtto.php">GÉNERO</a></li>
            <li><a href="idiomaMtto.php">IDIOMA</a></li>
            <li><a href="paisMtto.php">PAÍS</a></li>
        </ul>

        <div class="textoDerecha" style="overflow-x: auto;">
            <h1>Busqueda de libros</h1>
            <br>
            <a class="boton" href="index.php">REGRESAR AL INICIO</a>
            <br><br>

        <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table id="tabla"class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>libro_id</th>
                                    <th>titulo</th>
                                    <th>Autor</th>
                                    <th>Editorial</th>
                                    <th>Pais</th>
                                    <th>Fecha_publicacion</th>
                                    <th>Edicion</th>
                                    <th>Genero</th>
                                    <th>Idioma</th>
                                    <th>Portada</th>
                                    <th>Paginas</th>
                                    <th>ISBN</th>
                                    <th>Notas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $con = mysqli_connect("localhost","root","","libro_db");

                                if(isset($_POST['search']))
                                {
                                    $filtervalues = $_POST['search'];
                                    $query = "SELECT * FROM libro WHERE CONCAT(titulo, autor_id, editorial_id, pais_id, fecha_publicacion, edicion, genero_id, idioma_id, portada_id, paginas, isbn, notas) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['libro_id']; ?></td>
                                                <td><?= $items['titulo']; ?></td>
                                                <td><?= $items['autor_id']; ?></td>
                                                <td><?= $items['editorial_id']; ?></td>
                                                <td><?= $items['pais_id']; ?></td>
                                                <td><?= $items['fecha_publicacion']; ?></td>
                                                <td><?= $items['edicion']; ?></td>
                                                <td><?= $items['genero_id']; ?></td>
                                                <td><?= $items['idioma_id']; ?></td>
                                                <td><?= $items['portada_id']; ?></td>
                                                <td><?= $items['paginas']; ?></td>
                                                <td><?= $items['isbn']; ?></td>
                                                <td><?= $items['notas']; ?></td>  
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No se encontro el libro</td>
                                            </tr>
                                        <?php
                                    }
                                }

                            ?>
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            </div>
  </body>
</html>
