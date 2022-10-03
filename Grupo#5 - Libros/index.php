<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        LIBROS SABIDURIA
    </title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style sheet -->
    <link rel="icon" href="imagenes/logo.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar opciones -->
    <ul>
        <li><a class="active" href="index.php">INICIO</a></li>
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
        <h1>LIBROS SABIDURIA</h1>    
        <h2><u>Colección de libros</u></h2>
        <h3><strong>Bienvenidos a nuestra colección de libros</strong></h3>
        <p>Aquí puedes encontrar todos los libros que ya han sido registrados dentro de nuestra colección así como registrar nuevos.</p>
        <p>Debes comenzar registrando primero a los autores, editoriales, idiomas y demás.</p>
        <p>Para ello, debes de elegir una de las opciones del lado izquierdo.</p>
        <p>Si deseas crear un nuevo campo, haz click en el segundo botón de la parte superior y llena los campos que se requieren. 
            De igual manera puedes editar o eliminar las opciones ya existentes. 
            Si deseas regresar a la pagina principal, haz click en el primer boton de la parte superior.
        </p>
        <p><strong>¡Gracias por su preferencia!</strong></p>
            
        <h3><u>RECOMENDACIONES</u></h3>
        <div class="grid-container">
            <div><img class="img-index" src="imagenes/IMAGEN1.jpg"></div>
            <div><img class="img-index" src="imagenes/IMAGEN2.jpg"></div>
            <div><img class="img-index" src="imagenes/IMAGEN3.jpg"></div>
            <div><img class="img-index" src="imagenes/IMAGEN4.jpg"></div>
            <div><img class="img-index" src="imagenes/IMAGEN5.jpg"></div>
            <div><img class="img-index" src="imagenes/IMAGEN6.jpg"></div>
        </div>
    </div>
</body>
</html>