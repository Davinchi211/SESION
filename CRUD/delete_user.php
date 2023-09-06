<?php
    include ('conecta.php');
    $con = connection();

    $id = $_GET['id'];

    $sql = "DELETE * FROM db_users where id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: inicio.php");
    };

?>