<?php
    include('conecta.php');
    $con = connection();

    $id = null;
    $name = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO db_users VALUES('$id','$name','$lname','$user','$pass')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    };
?>