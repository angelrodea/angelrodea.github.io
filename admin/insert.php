<?php
    include("../db/db.php");

    $user = "admin";
    $pass = "admin";
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Query de inserción en la base de datos
    $query = "INSERT INTO usuario (correo, password) VALUES ('$user', '$hashed_password')";

    if ($connection->query($query)) {
        echo "Usuario insertado correctamente en la base de datos.";
    } else {
        echo "Error al insertar usuario en la base de datos: " . $connection->error;
    }

    $connection->close();
?>
