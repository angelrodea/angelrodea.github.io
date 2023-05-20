<?php 
    #<!------------------- Sesión ------------------------->
    session_start();
    function verifySession(){
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }
    if (verifySession() != true) {
        header("Location: http://localhost/app/user/login.php");
        exit;
    }

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: http://localhost/app/index.php");
        exit;
    }
    $name = $_SESSION['user']['nombre'] . " " . $_SESSION['user']['paterno']
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Alumno</title>
</head>

<body>
    <header>
        <div class="header-container mb-3">
            <nav class="navbar bg-body-tertiary bg-dark navbar-fixed-top" data-bs-theme="dark"">
                <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" style="height:30px;">
                    <span class="navbar-brand ms-2">Jean Piaget de oriente</span>
                </a>
                    <center>
                        <h2 class="navbar-text text-uppercase">
                            <?php echo $name ?>
                        </h2>
                    </center>
                    <form method="POST" class="d-flex">
                        <input type="submit" name="logout" value="Cerrar Sesión" class="btn btn-outline-danger">
                    </form>
                </div>
            </nav>
        </div>
    </header>