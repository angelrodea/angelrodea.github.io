<?php
    /* 
        ESTRUCTURA: primer letra de nombre - primera palabra del apellido paterno - primer letra del apellido materno
    */
    function generarCorreoYPass($nombre, $apPaterno, $apMaterno, $idAlumno) {
        include("db.php");
        $nombreInicial = strtolower(substr($nombre, 0, 1));
    
        $apPaternoArray = explode(' ', $apPaterno);
        $apPaternoPrimeraPalabra = strtolower($apPaternoArray[0]);
    
        $apMaternoInicial = strtolower(substr($apMaterno, 0, 1));
    
        // Generar una contraseña aleatoria de 12 caracteres
        $password = generarPassword(12);

        $correo = $nombreInicial . $apPaternoPrimeraPalabra . $apMaternoInicial . $idAlumno . "@gmail.com";

        // INSERT a USUARIO
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (correo, password) VALUES (?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ss", $correo, $hashed_password);

        if ($stmt->execute()) {
            $idUsuario = mysqli_insert_id($connection);
            // Actualizar la tabla "alumno"
            $sqlUpdate = "UPDATE alumno SET id_usuario = ? WHERE id_alumno = ?";
            $stmtUpdate = $connection->prepare($sqlUpdate);
            $stmtUpdate->bind_param("ii", $idUsuario, $idAlumno);
            
            if ($stmtUpdate->execute()) {
                return array("correo" => $correo, "password" => $password);
            } else {
                echo "Error al actualizar la tabla alumno: " . $stmtUpdate->error;
            }
            $stmtUpdate->close();
        } else {
            echo "Error al insertar en la tabla usuario: " . $stmt->error;
        }
        $stmt->close();
        $connection->close();
    
    }
    
    function generarPassword($longitud) {
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$%&*#";
        $password = "";

        for ($i = 0; $i < $longitud; $i++) {
            $randomIndex = rand(0, strlen($caracteres) - 1);
            $password .= $caracteres[$randomIndex];
        }

        return $password;
    }

    function enviarCorreo($email, $password) {
        $msg="";
        $para = "jeanpigetoriente@gmail.com"; // CAMBIAR por $email
        $asunto = "Inscripción Jean Piget Oriente";
        $mensaje = "<html>
                        <head>
                            <title>Continue con su proceso</title>
                        </head>
                        <body>
                            <p>Porfvor guarde la siguiente información y no la comparta con nadie</p>
                            <p>Su cuenta es: <b>$email</b></p>
                            <p>Su contraseña es: <b>$password</b></p>
                            <p>Gracias</p>
                        </body>
                    </html>";

        $cabeceras = "From: jeanpigetoriente@gmail.com" . "\r\n" .
            "Reply-To: jeanpigetoriente@gmail.com" . "\r\n" .
            "Content-type: text/html; charset=utf-8" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Envío del correo electrónico
        if(mail($para, $asunto, $mensaje, $cabeceras)) {
            header("Location: http://localhost/app/admisiones.php?send");
            exit;
        } else {
            $msg .= "<div class='container'><div class='alert alert-danger mt-4' role='alert'>
                        Hubo un error al enviar el correo
                    </div></div>";
            echo $msg;
        }
    }

    function obtenerGrupo($grado) {
        /* ID - GRUPO
            1 - 1A
            3 - 2A
            5 - 3A
            7 - 4A
            9 - 5A
            11 - 6A
            13 - Ninguno
        */
        $grupos = array(
            1 => 1,
            2 => 3,
            3 => 5,
            4 => 7,
            5 => 9,
            6 => 11,
            'Ninguno' => 13
        );
    
        return $grupos[$grado] ?? null;
    }

    if (isset($_POST['btnRegistro'])) {
        include("db.php");
        date_default_timezone_set('America/Mexico_City');
        $date = date('Y-m-d');

        $i = 0;
        $null = NULL;
        $status = 'solicitante';
        $url = "http://localhost/app/uploads/";
        $uploadDirectory = "../uploads/";
        $archivos = $_FILES;
        $validacion = 'pendiente';
        $documento = [
            'Acta de nacimiento',
            'CURP',
            'Formato inscripción',
            'INE del tutor',
            'Comprobante de domicilio',
            'Documento de boleta/kinder'
        ];
            
        $nombre = $_POST['nombre'];
        $apPaterno = $_POST['apPaterno'];
        $apMaterno = $_POST['apMaterno'];
        $edad = $_POST['edad'];
        $fecha_nacimiento = $_POST['nacimiento'];
        $grado = $_POST['grado'];
        $curp = $_POST['curp'];
        $genero = $_POST['genero'];
        $correo = $_POST['correo'];
        $celular = $_POST['tel'];
        $tutor = $_POST['tutor'];

        $dir_calle = $_POST['calle'];
        $dir_numero = $_POST['num'];
        $dir_colonia = $_POST['col'];
        $dir_cp = $_POST['cp'];
        $dir_municipio = $_POST['mun'];
        $dir_entidad = $_POST['entidad'];

        $idGrupo = obtenerGrupo($grado);

        $sqlAlumno = "INSERT INTO alumno (id_usuario, id_grupo, status, nombre, ap_paterno, ap_materno, edad, curp, 
                    fecha_nacimiento, genero, celular, correo, tutor, dir_calle, dir_numero, dir_colonia, dir_municipio, 
                    dir_cp, dir_entidad) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtAlumno = $connection->prepare(trim($sqlAlumno));
        $stmtAlumno->bind_param("iisssssssssssssssss", $idUsuario, $idGrupo, $status, $nombre, $apPaterno, $apMaterno, $edad, 
                                        $curp, $fecha_nacimiento, $genero, $celular, $correo, $tutor, $dir_calle, $dir_numero, 
                                        $dir_colonia, $dir_municipio, $dir_cp, $dir_entidad);

        if ($stmtAlumno->execute()) {
            // Obtener el ID del alumno recién insertado
            $idAlumno = $stmtAlumno->insert_id;

            // Recorrer los archivos recibidos
            foreach ($archivos as $nombreArchivo => $archivo) {
                $nombreArchivo = $idAlumno . "-" . basename($archivo['name']);
                $rutaArchivo = $uploadDirectory . $nombreArchivo;
                $rutaBase = $url . $nombreArchivo;

                // Mover el archivo a la carpeta de destino
                if (move_uploaded_file($archivo['tmp_name'], $rutaArchivo)) {
                    // Insertar información del archivo en la base de datos
                    $sqlArchivo = "INSERT INTO documento (id_alumno, documento, archivo, validacion, fecha) VALUES (?, ?, ?, ?, ?)";
                    $stmtArchivo = $connection->prepare($sqlArchivo);
                    $docActual = $documento[$i];

                    $stmtArchivo->bind_param("issss", $idAlumno, $docActual, $rutaBase, $validacion, $date);
                    $stmtArchivo->execute();
                    $stmtArchivo->close();
                    $i += 1;
                }
            }
            $resultado = generarCorreoYPass($nombre, $apPaterno, $apMaterno, $idAlumno);
            $email = $resultado["correo"];
            $password = $resultado["password"];
            enviarCorreo($email, $password);
        } else {
            echo 'ERROR :(';
        }
        $stmtAlumno->close();
        $connection->close();
    }
?>