<?php
    if (isset($_POST['id_comment'])) {
        include('db.php');
        $id_comment = $_POST['id_comment'];

        $query = "DELETE FROM comentario WHERE id_comentario = ?";
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "i", $id_comment);

        // Ejecutar consulta SQL
        $resultado = mysqli_stmt_execute($stmt);

        if ($resultado) {
            header("Location: http://localhost/app/comentarios.php?id=si");
            exit();
        } else {
            echo "Error al eliminar el comentario: " . mysqli_error($connection);
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
?>
