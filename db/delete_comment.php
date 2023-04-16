<?php
    // eliminar_comentario.php

    // Verificar si se ha enviado el formulario de eliminación
    if (isset($_POST['delComment'])) {
        include('db.php');
        $id_comentario = $_POST['id_comment'];

        $query = "DELETE FROM comentarios WHERE id = $id_comentario";

        // Ejecutar consulta SQL
        $resultado = mysqli_query($connection, $query);

        if ($resultado) {
            header("Location: http://localhost/app/comentarios.php");
        } else {
            echo "Error al eliminar el comentario: " . mysqli_error($connection);
        }
        
        mysqli_close($connection);
    }
?>
