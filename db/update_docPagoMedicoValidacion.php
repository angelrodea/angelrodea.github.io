<?php
    if (isset($_POST['btnValid'])) {
        include("db.php");
        $idMedico = $_POST['idDocMedico'];
        $idPago = $_POST['idDocPago'];
        $medico = $_POST['docMedico'];
        $pago = $_POST['docPago'];

        if ($medico != "Seleccionar" && $pago != "Seleccionar") {
            $sqlUpdateMedico = "UPDATE documento SET validacion = ? WHERE id_documento = ?";
            $stmtUpdateMedico = $connection->prepare($sqlUpdateMedico);
            $stmtUpdateMedico->bind_param("si", $medico, $idMedico);

            $sqlUpdatePago = "UPDATE documento SET validacion = ? WHERE id_documento = ?";
            $stmtUpdatePago = $connection->prepare($sqlUpdatePago);
            $stmtUpdatePago->bind_param("si", $pago, $idPago);

            if ($stmtUpdateMedico->execute() && $stmtUpdatePago->execute()) {
                header("Location: http://localhost/app/admin/pendientes.php");
                exit;
            } else {
                echo "Error al actualizar los documentos";
            }

            $stmtUpdateMedico->close();
            $stmtUpdatePago->close();
            $connection->close();
        } else {
            header("Location: http://localhost/app/admin/pendientes.php?warning");
            exit;
        }
    }      
?> 