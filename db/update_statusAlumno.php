<?php
    if (isset($_GET['id'])) {
        include("db.php");
        $id = $_GET['id'];
        $sql = "UPDATE alumno SET status = 'pendiente' WHERE id_alumno = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: http://localhost/app/admin/solicitantes.php");
            exit;
        } else {
            echo "Error al actualizar el status del alumno: " . $stmt->error;
        }

        // Cerrar la declaración preparada y la conexión
        $stmt->close();
        $connection->close();
    } else {
        echo "ID no especificado.";
    }
?>