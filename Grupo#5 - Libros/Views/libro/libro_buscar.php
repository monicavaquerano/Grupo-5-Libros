<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Libros</title>
    <!-- Style sheet -->
    <link rel="icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar opciones -->
    <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a href="libroMtto.php">LIBRO</a></li>
        <li><a href="autorMtto.php">AUTOR</a></li>
        <li><a href="editorialMtto.php">EDITORIAL</a></li>
        <li><a href="generoMtto.php">GÉNERO</a></li>
        <li><a href="idiomaMtto.php">IDIOMA</a></li>
        <li><a href="paisMtto.php">PAÍS</a></li>
        <li>
            <!-- Barra de búsqueda -->
            <div class="search">
                <div class="search-box">
                    <form action="busquedaMtto.php" method="POST">
                     <input type="text" name="buscar" required class="form-control" placeholder="Buscar por título de libro" >
                     <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form> 
                </div>
            </div>
        </li>
    </ul>

    <!-- Div -->
    <div class="textoDerecha" style="overflow-x: auto;">
        <h1>BÚSQUEDA DE LIBROS</h1>
        <br>
        <a class="boton" href="index.php">REGRESAR AL INICIO</a>
        <a class="boton" href="libroMtto.php">TODOS LOS LIBROS</a> 
        <br><br>
        <table id="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TÍTULO</th>
                    <th>AUTOR</th>
                    <th>EDITORIAL</th>
                    <th>PAÍS</th>
                    <th>FECHA PUBLICACIÓN</th>
                    <th>EDICIÓN</th>
                    <th>GÉNERO</th>
                    <th>IDIOMA</th>
                    <th>PORTADA</th>
                    <th>PÁGINAS</th>
                    <th>ISBN</th>
                    <th>NOTAS</th>
                    <th>MODIFICAR</th>
                   
                </tr>
            </thead>

            <tbody>
            <?php
                    foreach($data["libro"] as $data){
                        echo "<tr>";
                            echo "<td>".$data["libro_id"]."</td>";
                            echo "<td>".$data["titulo"]."</td>";
                            echo "<td>".$data["aapellido"]."</td>";
                            echo "<td>".$data["enombre"]."</td>";
                            echo "<td>".$data["pnombre"]."</td>";
                            echo "<td>".$data["fecha_publicacion"]."</td>";
                            echo "<td>".$data["edicion"]."</td>";
                            echo "<td>".$data["gnombre"]."</td>";
                            echo "<td>".$data["inombre"]."</td>";
                            echo "<td>".$data["potipo"]."</td>";
                            echo "<td>".$data["paginas"]."</td>";
                            echo "<td>".$data["isbn"]."</td>";
                            echo "<td>".$data["notas"]."</td>";
                            echo "<td> <a class='boton4'href='libroMtto.php?c=Libro&a=modificar&id=".$data["libro_id"]."'>MODIFICAR</a> </td>";
                            // echo "<td> <a class='boton2'href='libroMtto.php?c=Libro&a=eliminar&id=".$data["libro_id"]."'>ELIMINAR</a> </td>";
                            
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>