<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Idioma</title>
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
            <li><a class="active" href="idiomaMtto.php">IDIOMA</a></li>
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
                <h1>CREAR NUEVO IDIOMA</h1>
                <!-- BOTÓN DE REGRESO -->
                <a class="boton" href="idiomaMtto.php">REGRESAR A IDIOMA</a>
                <!-- Formulario -->
                <form id="nuevo" name="nuevo" method="POST" action="idiomaMtto.php?c=idioma&a=guardar" autocomplete="off">
                    <!-- Nombre del idioma -->
                    <div class="form-group">
                        <label for="nombre_idioma" id="nombre_idioma-label">NOMBRE DEL IDIOMA:</label>
                        <input class="form-control" type="text" id="nombre" name="nombre" required>
                    </div>
                    <br>
                    <button class="boton3" id="guardar" name="guardar" type="submit">GUARDAR</button>
                </form>
            </div>
        </div>
    </body>
</html>