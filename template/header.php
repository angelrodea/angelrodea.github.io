<?php 
    #<!------------------- Sesión ------------------------->
    session_start();
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: http://localhost/app/index.php");
        exit;
    }
    #<!------------------- Pruebas ------------------------->
    #<!------------------- Borrar ------------------------->
    if (isset($_POST['login'])) {
        header("Location: http://localhost/app/user/login.php");
        exit;
    }

    function verifySession() {
        if (isset($_SESSION['admin'])) {
            return true; 
        } else {
            return false;
        }
    }

    function verifySessionUser(){
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
    #<!------------------- Clase Activa ------------------------->
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Escuela</title>
</head>

<body>
    <header>
        <div class="header-container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark navbar-fixed-top" data-bs-theme="dark">
                <div class="container-fluid px-3">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="height:30px;">
                        <span class="navbar-brand ms-2">Jean Piaget de oriente</span>
                    </a>
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
                        <?php if (verifySession()): ?>
                            <form method="post" class="d-flex">
                                <a href="admin/solicitantes.php" class="btn btn-outline-light me-3">Administrar</a>
                            </form>
                            <form method="post" class="d-flex">
                                <input type="submit" name="logout" value="Cerrar Sesión" class="btn btn-outline-danger">
                            </form>
                        <!------------------- BORRAR ------------------------->
                        <?php elseif (verifySessionUser()): ?>
                            <form method="post" class="d-flex">
                                <a href="user/usuario.php" class="btn btn-outline-light me-3">Mi Prefil</a>
                            </form>
                            <form method="post" class="d-flex">
                                <input type="submit" name="logout" value="Cerrar Sesión" class="btn btn-outline-danger">
                            </form>
                        <?php else: ?>
                            <form method="post" class="d-flex">
                                <input type="submit" name="login" value="Iniciar Sesión" class="btn btn-outline-light">
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <div class="jumbotron text-center py-3">
                <h1>Jean Piaget de oriente</h1>
            </div>
        </div>
    </header>