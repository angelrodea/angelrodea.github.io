<?php
    if (isset($_POST['btnGrupo'])) {
        include("db.php");
        $grupo = $_POST['group'];
        $idAlumno = $_POST['idAlumno'];
        
        $grupos = array(
            '1A' => 1,
            '1B' => 2,
            '2A' => 3,
            '2B' => 4,
            '3A' => 5,
            '3B' => 6,
            '4A' => 7,
            '4B' => 8,
            '5A' => 9,
            '5B' => 10,
            '6A' => 11,
            '6B' => 12,
            'Ninguno' => 13
        );

        $idGrupo = $grupos[$grupo];

        $sqlUpdate = "UPDATE alumno SET id_grupo = ?, status = 'inscrito' WHERE id_alumno = ?";
        $stmtUpdate = $connection->prepare($sqlUpdate);
        $stmtUpdate->bind_param("ii", $idGrupo, $idAlumno);

        // Correo

        if ($stmtUpdate->execute()) {
            $connection->close(); 
            header("Location: http://localhost/app/admin/grupos.php");
            exit;
        } else {
            echo "Error al actualizar el grupo del alumno.";
        }
    }
?>