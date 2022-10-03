<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Género</title>
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
        <li><a class="active" href="generoMtto.php">GÉNERO</a></li>
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
            <h1>CREAR NUEVO GÉNERO</h1>
            <!-- BOTÓN DE REGRESO -->
            <a class="boton" href="generoMtto.php">REGRESAR A GÉNERO</a>
            <!-- Formulario -->
            <form id="nuevo" name="nuevo" method="POST" action="generoMtto.php?c=Genero&a=guardar" autocomplete="off">
                <!-- Nombre del género -->
                <div class="form-group">
                    <label for="nombre_genero" id="nombre_genero-label">NOMBRE DEL GÉNERO:</label>
                    <input class="form-control" type="text" id="nombre" name="nombre" required>
                </div>
                <!-- Descripción del género -->
                <div class="form-group">
                    <label for="descripcion_genero" id="descripcion_genero-label">DESCRIPCIÓN DEL GÉNERO <span> (Máximo 300 caracteres)</span>:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                </div>
                <br>
                <button class="boton3" id="guardar" name="guardar" type="submit">GUARDAR</button>
            </form>
        </div>
    </div>
    </body>
</html>