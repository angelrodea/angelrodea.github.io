<?php
    include("db.php");
    if (isset($_POST['btnAddCom'])) {
        $url = 'http://localhost/app/img/comunicado/';

        $comunicado = $_FILES['comunicado'];
        $nombreArchivo = $comunicado['name'];
        $tmp_name = $comunicado['tmp_name'];
        $tmp_name = $comunicado['tmp_name'];
        $comunicadoURL = $url . $nombreArchivo;

        $archivoDestino = '../img/comunicado/' . $nombreArchivo;

        $extensionesPermitidas = array('jpg', 'jpeg', 'png', 'gif');
        $extensionArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

        if (!in_array($extensionArchivo, $extensionesPermitidas)) {
            header("Location: http://localhost/app/index.php?error");
            exit;
        }

        if (file_exists($archivoDestino)) {
            header("Location: http://localhost/app/index.php?warning");
            exit;
        } else {
            move_uploaded_file($tmp_name, $archivoDestino);

            $sql = "INSERT INTO comunicado (comunicado) VALUES (?)";

            $stmt = $connection->prepare($sql);
            $stmt->bind_param('s', $comunicadoURL);

            if ($stmt->execute()) {
                header("Location: http://localhost/app/index.php");
                exit;
            } else {
                echo 'Error al agregar el comunicado: ' . $stmt->error;
            }

            $stmt->close();
            $connection->close();
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $uploadsDir = '../img/comunicado/';

        $sql = "SELECT comunicado FROM comunicado WHERE id_comunicado = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($comunicado);
        $stmt->fetch();
        $stmt->close();

        $comunicado = $uploadsDir . basename($comunicado);

        $sql = "DELETE FROM comunicado WHERE id_comunicado = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            if (unlink($comunicado)) {
                header("Location: http://localhost/app/index.php?success");
                exit;
            } else {
                echo "Error al eliminar el archivo.";
            }
        } else {
            echo "Error al eliminar el comunicado: " . $stmt->error;
        }

        $stmt->close();
        $connection->close();   
    }
?>