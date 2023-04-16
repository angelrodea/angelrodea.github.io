<?php
    include("db.php");
    $name = $_GET['name'];
    $comment = $_GET['comment'];
    $date = date('Y-m-d');

    #echo $name . " " . $key . " " . $comment . " " . $date;

    $sql = "INSERT INTO comentarios (nombre, comentario, fecha) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $name, $comment, $date); // "ssss" indica que los valores son de tipo string
    if ($stmt->execute()) {
        // Inserción exitosa, redirecciona a una página de éxito
        $stmt->close();
        header("Location: http://localhost/app/comentarios.php");
    } else {
        // Error en la inserción, redirecciona a una página de error
        
    }
?>