<?php
    if (isset($_POST['btnDocs'])) {
        include("db.php");
        $idDocs = $_POST['idDoc'];
        $validaciones = $_POST['validacion'];
    
        // Verificar si se recibieron valores para ambos arrays
        if (is_array($idDocs) && is_array($validaciones) && count($idDocs) === count($validaciones)) {
            foreach ($idDocs as $index => $idDoc) {
                $validacion = $validaciones[$index];
                if ($validacion == "Seleccionar") {
                    header("Location: http://localhost/app/admin/solicitantes.php?warning");
                    exit;
                }
            }
            foreach ($idDocs as $index => $idDoc) {
                $validacion = $validaciones[$index];
                $sqlUpdate = "UPDATE documento SET validacion = ? WHERE id_documento = ?";
                $stmtUpdate = $connection->prepare($sqlUpdate);
                $stmtUpdate->bind_param("si", $validacion, $idDoc);

                if ($stmtUpdate->execute()) {
                    echo "ID: $idDooc <br>Validacion: $validacion";
                } else {
                    echo "Error al actualizar el documento con idDoc = $idDoc <br>";
                }
            }
            header("Location: http://localhost/app/admin/solicitantes.php");
            exit;
        }
        $connection->close();
        $stmtUpdate->close();
    }      
?> 