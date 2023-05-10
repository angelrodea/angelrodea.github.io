<?php   
    $server="localhost";
    $db="test";
    $user="root";
    $pass="";
    try {
        $connection = new mysqli($server, $user, $pass, $db);    

        if ($connection->connect_error) {
            die("Conexión fallida: " . $connection->connect_error);
        }
        // Verificar si la conexión se realizó correctamente
        #if ($connection) {
        #    echo "Conexión exitosa a la base de datos";
        #} else {
            #echo "Error al conectar a la base de datos";
        #}
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>