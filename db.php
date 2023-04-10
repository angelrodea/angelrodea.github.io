<?php   
    $sever="localhost";
    $db="app";
    $user="root";
    $pass="";
    try {
        $conection= new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>