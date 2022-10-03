<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Países</title>
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
        <li><a class="active" href="paisMtto.php">PAÍS</a></li>
        <li>
            <!-- barra de búsqueda -->
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
        <h1>LISTA DE PAÍSES</h1>
        <br>
        <a class="boton" href="index.php">REGRESAR AL INICIO</a>
        <!-- <a class="boton"href="index.php?c=Pais&a=nuevo">AGREGAR</a> -->
        <br><br>
        <table id="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($data["pais"] as $data){
                        echo "<tr>"; 
                            echo "<td>".$data["pais_id"]."</td>";
                            echo "<td>".$data["nombre"]."</td>";
                            echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    </body>
</html>