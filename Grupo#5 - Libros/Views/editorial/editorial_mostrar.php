
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editoriales</title>
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
            <li><a class="active" href="editorialMtto.php">EDITORIAL</a></li>
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
            <h1>LISTA DE EDITORIALES</h1>
            <br>
            <a class="boton" href="index.php">REGRESAR AL INICIO</a>
            <a class="boton" href="editorialMtto.php?c=Editorial&a=nuevo">AGREGAR NUEVA EDITORIAL</a> 
            <br><br>
            <table id="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PAÍS</th>
                        <th>MODIFICAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        foreach($data["editorial"] as $data){
                            echo "<tr>"; 
                                echo "<td>".$data["editorial_id"]."</td>";
                                echo "<td>".$data["neditorial"]."</td>";
                                echo "<td>".$data["npais"]."</td>";
                                echo "<td> <a class='boton4' href='editorialMtto.php?c=Editorial&a=modificar&id=".$data["editorial_id"]."'>MODIFICAR</a> </td>";
                                echo "<td> <a class='boton2' href='editorialMtto.php?c=Editorial&a=eliminar&id=".$data["editorial_id"]."'>ELIMINAR</a> </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>    
            </table>
        </div>
    </body>
</html>