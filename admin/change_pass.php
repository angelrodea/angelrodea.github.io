<?php
    # VIDEO PARA ENVIAR CORREO
    # https://m.youtube.com/watch?v=6YWlyllmciU&pp=ygUWeGFtcHAgZW52aWFyIGVtYWlsIHBocA%3D%3D
    $msg = "";

    if (isset($_POST['change'])){ 

        include("../db/db.php");
        $rmail = mysqli_real_escape_string($connection, $_POST['email']);
        $connection->close();

        if ($rmail == "jeanpigetoriente@gmail.com") {

            $para = "jeanpigetoriente@gmail.com";
            $asunto = "Restauración de constraseña";
            $mensaje = "<html>
                            <head>
                                <title>T</title>
                            </head>
                            <body>
                                <p>Ha solicitado restaurar su contraseña.</p>
                                <p>Su nueva contraseña es: <b>admin</b></p>
                                <p>Si usted no ha solicitado esto, haga caso omiso</p>
                            </body>
                        </html>";
    
            $cabeceras = "From: jeanpigetoriente@gmail.com" . "\r\n" .
                "Reply-To: jeanpigetoriente@gmail.com" . "\r\n" .
                "Content-type: text/html; charset=utf-8" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();
    
            // Envío del correo electrónico
            if(mail($para, $asunto, $mensaje, $cabeceras)) {
                $msg .= "<div class='container'><div class='alert alert-success mt-4' role='alert'>
                            El correo se ha enviado correctamente
                        </div></div>";
            } else {
                $msg .= "<div class='container'><div class='alert alert-danger mt-4' role='alert'>
                            Hubo un error al enviar el correo
                        </div></div>";
            }      
        } else {
            $msg .= "<div class='container'><div class='alert alert-danger mt-4' role='alert'>
                        Correo incorrecto
                    </div></div>";
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
                                            <h2 class="fw-bold mb-5 text-uppercase">Restaurar contraseña</h2>
                                            <form method="POST">
                                                <div>
                                                    <p class="text-white-50">Porfavor confirme su correo</p>
                                                    <input type="text" name="email" class="form-control rounded-left mb-4" 
                                                        placeholder="jea******@gmail.com" required>
                                                </div>
                                                <center>
                                                    <button type="submit" name="change" class="btn btn-outline-light">
                                                        Confirmar <span></span>
                                                    </button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $msg; ?>
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