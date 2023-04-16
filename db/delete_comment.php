<?php
    if (isset($_POST['id_comment'])) {
        include('db.php');
        $id_comment = $_POST['id_comment'];

        $query = "DELETE FROM comentarios WHERE id = $id_comment";

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
