<?php
    if (isset($_GET['id'])) {
        include("db.php");
        $id = $_GET['id'];

        // Eliminar los registros relacionados en la tabla "documento"
        $sqlDocumento = "DELETE FROM documento WHERE id_alumno = ?";
        $stmtDocumento = $connection->prepare($sqlDocumento);
        $stmtDocumento->bind_param("i", $id);

        if ($stmtDocumento->execute()) {
            // Eliminar el alumno de la tabla "alumno"
            $sqlAlumno = "DELETE FROM alumno WHERE id_alumno = ?";
            $stmtAlumno = $connection->prepare($sqlAlumno);
            $stmtAlumno->bind_param("i", $id);

            if ($stmtAlumno->execute()) {
                $previousPage = $_SERVER['HTTP_REFERER'];
                header("Location: $previousPage");
                exit;
            } else {
                echo "Error al eliminar el alumno: " . $stmtAlumno->error;
            }
        } else {
            echo "Error al eliminar los registros relacionados en la tabla documento: " . $stmtDocumento->error;
        }

        $stmtDocumento->close();
        $stmtAlumno->close();
        $connection->close();
    } else {
        echo "No se proporcionó el ID del alumno.";
    }
?>
