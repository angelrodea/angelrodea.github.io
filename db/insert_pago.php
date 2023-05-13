<?php
    session_start();
    $id = $_SESSION['user']['id'];
    $grado = 1 + $_SESSION['user']['grado'];
    
    date_default_timezone_set('America/Mexico_City');
    $date = date('Y-m-d');
    $nameDoc = 'Comprobante de pago';
    $validacion = 'pendiente';

    if (isset($_FILES['doc_pago'])) {
        include("../db/db.php");
        $archivoNombre = $_FILES['doc_pago']['name'];
        $archivoTipo = $_FILES['doc_pago']['type'];
        $archivoTmpNombre = $_FILES['doc_pago']['tmp_name'];
        $archivoError = $_FILES['doc_pago']['error'];
        $archivoTamano = $_FILES['doc_pago']['size']; // Tamaño del archivo en bytes

        if ($archivoError === UPLOAD_ERR_OK) {
            $directorioDestino = '../uploads/';
            $rutaArchivoDestino = $directorioDestino . $id . '-G' . $grado . '-' . $archivoNombre;
            $url = "http://localhost/app/uploads/". $id . '-G' . $grado . '-' . $archivoNombre;
            move_uploaded_file($archivoTmpNombre, $rutaArchivoDestino);

            // Insertar en la tabla documento
            $sqlDocumento = "INSERT INTO documento (id_alumno, documento, archivo, validacion, fecha) VALUES (?, ?, ?, ?, ?)";
            $stmtDocumento = $connection->prepare($sqlDocumento);
            $stmtDocumento->bind_param("issss", $id, $nameDoc, $url, $validacion, $date);
            $stmtDocumento->execute();
            $idDocumento = $stmtDocumento->insert_id;
            $stmtDocumento->close();

            // Insertar en la tabla historial
            $sqlHistorial = "INSERT INTO historial (id_alumno, id_documento, grado) VALUES (?, ?, ?)";
            $stmtHistorial = $connection->prepare($sqlHistorial);
            $stmtHistorial->bind_param("iii", $id, $idDocumento, $grado);
            $stmtHistorial->execute();
            $stmtHistorial->close();

            header("Location: http://localhost/app/user/usuario.php");
            exit;
        } else {
            // Ha ocurrido un error al cargar el archivo
            echo 'Error al cargar el archivo. Código de error: ' . $archivoError;
        }
    }
?>