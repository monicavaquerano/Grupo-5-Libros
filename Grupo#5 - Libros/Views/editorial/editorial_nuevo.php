<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nueva Editorial</title>
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
        <div class="container">
            <h1>CREAR NUEVA EDITORIAL</h1>
            <!-- BOTÓN DE REGRESO -->
            <a class="boton" href="editorialMtto.php">REGRESAR A EDITORIAL</a>
            <!-- Formulario -->
            <form id="nuevo" name="nuevo" method="POST" action="editorialMtto.php?c=Editorial&a=guardar" autocomplete="off">
                <!-- Nombre de la editorial -->
                <div class="form-group">
                    <label for="nombre_editorial" id="nombre_editorial-label">NOMBRE DE LA EDITORIAL:</label>
                    <input class="form-control" type="text" id="nombre" name="nombre" required>
                </div>
                <!-- País del autor -->
                <div class="form-group"> 
                    <label for="pais_editorial" id="pais_editorial-label">PAÍS DE LA EDITORIAL:</label>
                    <select id="dropdown" class="form-control" name="pais" id="pais">
                        <option value="0" selected disabled>Seleccione:</option>
                        <?php
                        foreach ($retornado as $p)
                        echo '<option value="'.$p["pais_id"].'">'.$p["nombre"].'</option>';
                        ?>
                    </select>
                    <br>
                <button class="boton3" id="guardar" name="guardar" type="submit">GUARDAR</button>
            </form>
        </div>
    </div>
    </body>
</html>