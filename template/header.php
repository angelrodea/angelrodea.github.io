<?php 
    function claseActiva($pagina) {
        if (basename($_SERVER['PHP_SELF']) == $pagina) {
            echo 'active';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Escuela</title>
</head>

<body>
    <header>
        <div class="header-container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-fixed-top" data-bs-theme="dark">
                <div class="container-fluid px-3">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="height:30px;"></a>
                    <span class="navbar-brand">Jean Piaget de oriente</span>
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item nav-mar">
                                <a class="nav-link <?php claseActiva('index.php'); ?>" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item nav-mar">
                                <a class="nav-link <?php claseActiva('admisiones.php'); ?>" href="admisiones.php">Admisiones</a>
                            </li>
                            <li class="nav-item nav-mar">
                                <a class="nav-link <?php claseActiva('profesores.php'); ?>" href="profesores.php">Profesores</a>
                            </li>
                            <li class="nav-item nav-mar">
                                <a class="nav-link <?php claseActiva('comentarios.php'); ?>" href="comentarios.php">Comentarios</a>
                            </li>
                            <li class="nav-item nav-mar">
                                <a class="nav-link <?php claseActiva('contacto.php'); ?>" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="jumbotron text-center py-3">
                <h1>Jean Piaget de oriente</h1>
            </div>
        </div>
    </header>