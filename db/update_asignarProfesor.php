<?php
    if (isset($_POST['btnAsignar'])) {
        include("db.php");

        $idGrupo = $_POST['select-grupo'];
        $idProf = $_POST['select-profesor'];

        if ($idProf == "Seleccionar") {
            header("Location: http://localhost/app/admin/asignarProfesor.php?warning");
            exit;
        }

        $query = "UPDATE grupo SET id_profesor = $idProf WHERE id_grupo = $idGrupo";
        $result = $connection->query($query);

        if ($result) {
            header("Location: http://localhost/app/admin/asignarProfesor.php");
            exit;
        } else {
            // Error al realizar el update
            echo "Error al actualizar la asignación.";
        }
    }
?>