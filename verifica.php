<?php
    //Habilitando la sesion
    session_start();

    //Capturando los datos
    $_SESSION["usuario"]=getUsuario();
    $_SESSION["password"]=getClave();

    //Asignando variables
    $us = $_SESSION["usuario"];
    $pas = $_SESSION["password"];

    //enviando el valor de las variables y null si no existe
    function getUsuario(){
        return $_POST["txtUser"] ?? null;
    }
    function getClave(){
        return $_POST["txtPassword"] ?? null;
    }    
?>