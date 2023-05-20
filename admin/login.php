<?php
    session_start();
    include("../db/db.php");
    $mensaje="";

    if (isset($_POST['access'])){ 
        $ruser = mysqli_real_escape_string($connection, $_POST['user']);
        $rpass = mysqli_real_escape_string($connection, $_POST['pass']);
        $userok = '';
        $passok = '';
        
        $consult = "SELECT * FROM usuario WHERE correo = '$ruser'";
        
        if ($result = $connection->query($consult)) {
            while ($row = $result->fetch_array()) {
                $userok = $row['correo'];
                $passok = $row['password'];
            }
            $result->close();
        }
        $connection->close();
        if (isset($ruser) && isset($rpass)) {
            if ($ruser == $userok && password_verify($rpass, $passok)){
                $_SESSION['admin'] = $ruser;
                header("Location: http://localhost/app/admin/solicitantes.php");
            } else {
                $mensaje.="<div class='container'><div class='alert alert-danger mt-4' role='alert'>
                            Credenciales incorrectas
                            </div></div>";
            }
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
                                            <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesión</h2>
                                            <p class="text-white-50 mb-5">Por favor ingrese su correo y contraseña!</p>
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
                                                    <a href="change_pass.php" name="" class="text-white">
                                                        Olvidaste la contraseña?<span></span>
                                                    </a>
                                                </center>
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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</html>