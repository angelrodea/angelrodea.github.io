<?php
    include("db.php");
    if (isset($_GET['id'])) {
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

        $stmt->close();
        $connection->close();
    } elseif (isset($_GET['id2'])) {
        $id = $_GET['id2'];
        $sql = "UPDATE alumno SET status = 'grupos' WHERE id_alumno = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: http://localhost/app/admin/pendientes.php");
            exit;
        } else {
            echo "Error al actualizar el status del alumno: " . $stmt->error;
        }

        $stmt->close();
        $connection->close();
    } else {
        echo "ID no especificado.";
    }
?>