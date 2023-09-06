<?php
include('conecta.php');
$con = connection();

$id = $_GET['id'];

$sql = "Select * FROM db_users where id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <div>
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <label for="">Nombre</label>
            <input type="text" name="firstname" placeholder="Nombre" value="<?= $row['firstname'] ?>">
            <label for="">Apellido</label>
            <input type="text" name="lastname" placeholder="Apellido" value="<?= $row['lastname'] ?>">
            <label for="">Usuario</label>
            <input type="text" name="user" placeholder="Usuario" value="<?= $row['username'] ?>">
            <label for="">Cotraseña</label>
            <input type="password" name="pass" placeholder="Contraseña" value="<?= $row['password'] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <title>Document</title>
</head>
<body>
    
</body>
</html>