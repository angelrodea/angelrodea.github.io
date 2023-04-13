<?php   
    $server="localhost";
    $db="escuela";
    $user="root";
    $pass="";
    try {
        $conection= new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>