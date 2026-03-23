<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet Angel de la Guarda</title>
    <link rel="shortcut icon" href="img/insignia-pequeño.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap-icons/font/bootstrap-icons.css">
    <script src="js/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Heebo&family=Roboto:wght@300&display=swap" rel="stylesheet">
    
    
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="img/insignia pequeño.png" alt="" width="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://moodle.ieangeldelaguarda.org">Virtual</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://wordpress.ieangeldelaguarda.org">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="subir-archivo.html">Subir</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/tutoriales.html">Tutoriales</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div id="contenido">
        <div class="container-fluid">
            <div class="row justify-content-md-center pt-5 pb-5">
                <div class="col text-center pt-5 pb-5">
                <?php

                    $nombre=$_FILES['archivo']['name'];
                    $guardado=$_FILES['archivo']['tmp_name'];

                    if(!file_exists('archivos')){
                        echo "No hay carpeta";
                    } else {
                        if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                            echo "<h2>Archivo guardado con éxito</h2>\n";
                            echo "<div class=\"contenedor-icono\">\n";
                            echo "    <i class=\"bi bi-emoji-sunglasses\"></i>\n";
                            echo "</div>\n";
                        } else {
                            echo "<h2>Archivo no se puede guardar</h2>\n";
                            echo "<div class=\"contenedor-icono\">\n";
                            echo "    <i class=\"bi bi-emoji-frown\"></i>\n";
                            echo "</div>\n";
                        }
                    }

                ?>
                </div>
            </div>

        </div>
    </div>

    <!-- AREAS -->
    
    

    <!-- FOOTER -->
    <div id="footer" class="p-1 bg-danger">
        <div class="container w-50">
            <div class="row justify-content-md-center py-5">
                <div class="col text-center text-white">
                    <p>Av. Samuel Pastor # 641 - Samuel Pastor <br>
                    Teléfono: (054) 512716 <br>
                    Camaná - Arequipa - Perú</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>