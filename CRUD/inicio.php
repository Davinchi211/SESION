<?php
include('conecta.php');

$con = connection();
$sql = "Select * FROM db_users";
$query = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <script type="text/javascript">
        function Confirm_insert(){
            alert('USUARIO AGREGADO EXITOSAMENTE !!');
            return true;
        }
        </script>
    <div>
        <form action="insert_user.php" method="POST">
            <h1>Crear Usuario</h1>
            <label for="">ID</label>
            <input type="text" name="id" disabled>
            <label for="">Nombre</label>
            <input type="text" name="firstname" placeholder="Nombre">
            <label for="">Apellido</label>
            <input type="text" name="lastname" placeholder="Apellido">
            <label for="">Usuario</label>
            <input type="text" name="user" placeholder="Usuario">
            <label for="">Cotraseña</label>
            <input type="password" name="pass" placeholder="Contraseña">
            <input type="submit" value="Agregar Usuario" onclick="Confirm_insert()">
        </form>
    </div>
    <br>
    <div>
        <table>
            <thead>
                <tr>
                    <th>USUARIOS</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>USUARIO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['firstname']?></td>
                        <td><?=$row['lastname']?></td>
                        <td><?=$row['user']?></td>
                        <td><a href="update_user.php?id=<?= $row['id']?>">MODIFICAR</a></td>
                        <td><a href="delete_user.php?id=<?= $row['id']?>">ELIMINAR</a></td>
                    </tr>
                    <?php endwhile;?>
                    <tr>
                        <td colspan="5"><br><?php echo "TOTAL USUARIOS REGISTRADOS: ".$num_rows.""; ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>
</html>