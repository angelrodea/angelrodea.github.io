<?php
    if (isset($_POST['btnComment'])){
        session_start();
        include("db.php");
        date_default_timezone_set('America/Mexico_City');
        $id_alumno = $_SESSION['user']['id'];
        $comment = $_POST['comment'];
        $date = date('Y-m-d');
    
        //echo $id_alumno . " - " . $comment . " - " . $date;

        $sql = "INSERT INTO comentario (id_alumno, comentario, fecha) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sss", $id_alumno, $comment, $date);
        if ($stmt->execute()) {
            $stmt->close();
            header("Location: http://localhost/app/comentarios.php");
            exit;
        } else {
            // Error en la inserción, redirecciona a una página de error   
        }
    }
?>