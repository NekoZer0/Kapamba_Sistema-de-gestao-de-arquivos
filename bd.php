<?php
    $servidor="localhost";
    $baseDeDados="app";
    $usuarios="root";
    $senha="";

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$baseDeDados",$usuarios,$senha);
    }catch(Exception $ex) {
        echo $ex->getMessage();
    }

?>