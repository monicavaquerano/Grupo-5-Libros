<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modificar Autor</title>
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
        <li><a class="active" href="autorMtto.php">AUTOR</a></li>
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
            <h1>MODIFICAR AUTOR</h1>
            <!-- BOTÓN DE REGRESO -->
            <a class="boton" href="autorMtto.php">REGRESAR A AUTOR</a>
            <!-- Formulario -->
            <form id="nuevo" name="nuevo" method="POST" autocomplete="off" action="autorMtto.php?c=Autor&a=actualizar">
                <input type="hidden" id="id" name="id" value="<?php echo $data["autor_id"];?>">
                <!-- Nombre del autor -->
                <div class="form-group">
                    <label for="nombre" id="nombre_autor-label">NOMBRE DEL AUTOR:</label>
                    <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $data["autor"]["nombre"];?>">
                </div>
                <!-- Apellido del autor -->
                <div class="form-group"> 
                    <label for="apellido" id="apellido-label">APELLIDO DEL AUTOR:</label>
                    <input class="form-control" type="text" id="apellido" name="apellido" value="<?php echo $data["autor"]["apellido"];?>">
                </div>
                <!-- Fecha de nacimiento del autor -->
                <div class="form-group"> 
                    <label for="fecha_nacimiento" id="nacimiento-label">FECHA DE NACIMIENTO DEL AUTOR:</label>
                    <input class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $data["autor"]["fecha_nacimiento"];?>" required>
                </div>
                <!-- Sexo del autor -->
                <div class="form-group"> 
                    <label for="sexo" id="sexo-label">SEXO DEL AUTOR:</label>
                    <select id="dropdown" class="form-control" name="sexo" id="sexo">
                        <option value="0" selected disabled>Seleccione:</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
                <!-- País del autor -->
                <div class="form-group"> 
                    <label for="pais" id="pais_autor-label">PAÍS DEL AUTOR:</label>
                    <select id="dropdown" class="form-control" name="pais" id="pais" value="<?php echo $data["autor"]["pais_id"];?>" required>
                        <option value="" selected disabled>Seleccione:</option>
                        <?php
                        foreach ($retornado as $p)
                        echo '<option value="'.$p["pais_id"].'">'.$p["nombre"].'</option>';
                        ?>
                    </select>
                </div>
                <br>
                <button class="boton3" id="guardar" name="guardar" type="submit">MODIFICAR</button>
            </form>
        </div>
    </div>
</body>
</html>