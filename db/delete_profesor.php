<?php
    if (isset($_POST['profesor_id'])) {
        include('db.php');
        $profesor_id = $_POST['profesor_id'];

        $query = "DELETE FROM profesor WHERE id_profesor = $profesor_id";

        // Ejecutar consulta SQL
        $resultado = mysqli_query($connection, $query);

        if ($resultado) {
            header("Location: http://localhost/app/profesores.php");
        } else {
            echo "Error al eliminar el comentario: " . mysqli_error($connection);
        }
        
        mysqli_close($connection);
    }
?>