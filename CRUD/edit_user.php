<?php
include('conecta.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['firstname'];
$lname = $_POST['lastname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "UPDATE db_users SET firstname='$name', lastname='$lname', user='$user',password='$pass' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: inicio.php");
}
?>