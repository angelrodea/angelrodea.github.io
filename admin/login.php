<?php
    session_start();
    error_reporting(0);
    include("../db.php");

    if (isset($_POST['access'])){ 
        $ruser = mysqli_real_escape_string($connection, $_POST['user']);
        $rpass = mysqli_real_escape_string($connection, $_POST['pass']);
        $userok = '';
        $passok = '';
        
        $consult = "SELECT * FROM user WHERE user = '$ruser'";
        
        if ($result = $connection->query($consult)) {
            while ($row = $result->fetch_array()) {
                $userok = $row['user'];
                $passok = $row['password'];
            }
            $result->close();
        }
        $connection->close();
        if (isset($ruser) && isset($rpass)) {
            if ($ruser == $userok && password_verify($rpass, $passok)){
                $_SESSION['login'] = TRUE;
                $_SESSION['user'] = $ruser;
                header("Location: http://localhost/app/index.php");
            } else {
                $mensaje.="<div class='container'><div class='alert alert-danger mt-4' role='alert'>
                            Credenciales incorrectas
                            </div></div>";
            }
        }
    }
    # LOGOUT
    if (isset($_POST['logout'])) { // Comprobar si se ha enviado el formulario de cierre de sesión
        session_unset(); // Eliminar todas las variables de sesión
        session_destroy(); // Destruir la sesión
        header("Location: http://localhost/app/index.php"); // Redirigir a la página de inicio de sesión
        exit;
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
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>

<body>
    <main>
        <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <div class="login-box">
                                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                            <p class="text-white-50 mb-5">Please enter your user and password!</p>
                                            <form method="POST">
                                                <div>
                                                    <input type="text" name="user" class="form-control rounded-left mb-4" 
                                                        placeholder="Username" required>
                                                </div>
                                                <div>
                                                    <input type="password" name="pass" class="form-control form-control-md mb-5" 
                                                        placeholder="********"/>
                                                </div>
                                                <center>
                                                    <button type="submit" name="access" class="btn btn-outline-light">
                                                        Acceder <span></span>
                                                    </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $mensaje; ?>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <!--
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" require />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --> 
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</html>