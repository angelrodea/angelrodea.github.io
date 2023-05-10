<?php
    include("db.php");
    $id_alumno = $_GET['name'];
    $comment = $_GET['comment'];
    $date = date('Y-m-d');

    #echo $name . " " . $key . " " . $comment . " " . $date;

    $sql = "INSERT INTO comentario (id_alumno, comentario, fecha) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $id_alumno, $comment, $date); // "ssss" indica que los valores son de tipo string
    if ($stmt->execute()) {
        // Inserción exitosa, redirecciona a una página de éxito
        $stmt->close();
        header("Location: http://localhost/app/comentarios.php");
    } else {
        // Error en la inserción, redirecciona a una página de error
        
    }
?>