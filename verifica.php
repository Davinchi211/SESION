<?php
    //Habilitando la sesion
    session_start();

    //Capturando los datos
    $_SESSION["usuario"]=getUsuario();
    $_SESSION["password"]=getClave();

    $us = $_SESSION["usuario"];
    $pas = $_SESSION["password"];

    function getUsuario(){
        return $_POST["txtUser"];
    }
    function getClave(){
        return $_POST["txtPassword"];
    }    
?>