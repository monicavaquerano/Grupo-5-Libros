<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
    <!-- Style sheet -->
    <link rel="icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar opciones -->
    <ul>
        <li><a href="index.php">INICIO</a></li>
        <li><a class="active" href="libroMtto.php">LIBRO</a></li>
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
            <div class="container">
                <h1>AGREGAR NUEVO LIBRO</h1>
                <!-- BOTÓN DE REGRESO -->
                <a class="boton" href="libroMtto.php">REGRESAR A LIBRO</a>
                <!-- Formulario -->
                <form id="nuevo" name="nuevo" method="POST" action="libroMtto.php?c=libro&a=guardar" autocomplete="off">
                    <!-- Título del libro -->
                    <div class="form-group">
                        <label for="titulo" id="titulo-label">TÍTULO DEL LIBRO:</label>
                        <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Ingrese aquí el título del libro" required>
                    </div>
                    <!-- Autor del libro ***** dejar con apellido-->
                    <div class="form-group">
                        <label for="autor_libro" id="autor_libro-label">AUTOR DEL LIBRO:</label>
                        <select id="dropdown" class="form-control" name="autor" id="autor">
                            <option value="" selected disabled>Seleccione:</option>
                            <?php
                            foreach ($retornando_autor as $a)
                            echo '<option value="'.$a["autor_id"].'">'.$a["apellido"].'</option>';
                            ?>
                        </select>
                    </div>
                    <!-- Editorial del libro-->
                <div class="form-group">
                    <label for="editorial_libro" id="editorial_libro-label">EDITORIAL DEL LIBRO:</label>
                    <select id="dropdown" class="form-control" name="editorial" id="editorial">
                            <option value="" selected disabled>Seleccione:</option>
                            <?php
                            foreach ($retornando_editorial as $e)
                            echo '<option value="'.$e["editorial_id"].'">'.$e["editorial_id"].'</option>';
                            ?>
                        </select>
                    </div>
                <!-- País de publicación -->
                <div class="form-group"> 
                    <label for="pais_libro" id="pais_libro-label">PAÍS DE PUBLICACIÓN:</label>
                    <select id="dropdown" class="form-control" name="pais" id="pais">
                        <option value="0" selected disabled>Seleccione:</option>
                        <?php
                        foreach ($retornando_pais as $p)
                        echo '<option value="'.$p["pais_id"].'">'.$p["nombre"].'</option>';
                        ?>
                    </select>
                </div>
                <!-- Fecha de publicación del libro -->
                <div class="form-group"> 
                    <label for="fecha_publicacion" id="publicacion-label">FECHA DE PUBLICACIÓN:</label>
                    <input class="form-control" type="date" id="fecha_publicacion" name="fecha_publicacion">
                </div>
                <!-- N° de edición -->
                <div class="form-group"> 
                    <label for="edicion" id="edicion-label">N° DE EDICIÓN:</label>
                    <input class="form-control" type="number" min="1" id="edicion" name="edicion" placeholder="Ingrese aquí el número de edición">
                </div>
                <!-- Género del libro -->
                <div class="form-group"> 
                    <label for="genero_libro" id="genero_libro-label">GÉNERO DEL LIBRO:</label>
                    <select id="dropdown" class="form-control" name="genero" id="genero">
                            <option value="" selected disabled>Seleccione:</option>
                            <?php
                            foreach ($retornando_genero as $g)
                            echo '<option value="'.$g["genero_id"].'">'.$g["nombre"].'</option>';
                            ?>
                        </select>
                </div>
                <!-- Idioma del libro -->
                <div class="form-group"> 
                    <label for="idioma_libro" id="idioma_libro-label">IDIOMA DEL LIBRO:</label>
                    <select id="dropdown" class="form-control" name="idioma" id="idioma">
                        <option value="0" selected disabled>Seleccione:</option>
                        <?php
                            foreach ($retornando_idioma as $i)
                            echo '<option value="'.$i["idioma_id"].'">'.$i["nombre"].'</option>';
                        ?>
                    </select>
                </div>
                <!-- Portada del libro -->
                <div class="form-group"> 
                    <label for="portada_libro" id="portada_libro-label">PORTADA DEL LIBRO:</label>
                    <select id="dropdown" class="form-control" name="portada" id="portada">
                            <option value="" selected disabled>Seleccione:</option>
                            <?php
                            foreach ($retornando_portada as $po)
                            echo '<option value="'.$po["portada_id"].'">'.$po["tipo"].'</option>';
                            ?>
                        </select>
                    </div>
                    <!-- Páginas del libro-->
                    <div class="form-group"> 
                        <label for="paginas" id="paginas-label">N° DE PÁGINAS DEL LIBRO:</label>
                        <input class="form-control" type="number" min="1" id="paginas" name="paginas" placeholder="Ingrese aquí la cantidad de páginas del libro">
                    </div>
                    <!-- ISBN del libro-->
                    <div class="form-group"> 
                        <label for="isbn" id="isbn-label" >ISBN DEL LIBRO:</label>
                        <input class="form-control" type="text" id="isbn" name="isbn" placeholder="Ingrese aquí el código ISBN">
                    </div>
                    <!-- Notas adicionales-->
                    <div class="form-group"> 
                        <label for="notas" id="notas-label">NOTAS ADICIONALES <span>(Máx. 300 caracteres):</span>:</label>
                        <textarea class="form-control" id="notas" name="notas" placeholder="Ingrese aquí cualquier nota adicional..."></textarea>
                    </div>
                    <button class="boton3" id="guardar" name="guardar" type="submit">GUARDAR</button>
                </form>
            </div>
        </div>
</body>
</html>