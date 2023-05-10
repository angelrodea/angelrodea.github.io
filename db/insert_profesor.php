<?php
    if (isset($_POST['addProfesor'])){
        include("db.php");
        $name = $_POST['name'];
        $perfil = $_POST['perfil'];
        $exp = $_POST['exp'];
        $aptitude = $_POST['aptitude'];
        $other = $_POST['other'];

        $sql = "INSERT INTO profesor (nombre, perfil, experiencia, aptitudes, otros) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssss", $name, $perfil, $exp, $aptitude, $other); // "sssss" indica que los valores son de tipo string
        if ($stmt->execute()) {
            // Inserción exitosa, redirecciona a una página de éxito
            $stmt->close();
            header("Location: http://localhost/app/profesores.php");
        } else {
            // Error en la inserción, redirecciona a una página de error
            echo 'ERROR :(';
        }
    }
?>
