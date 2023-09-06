<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'verifica.php';?>
        <div class="w-25 p-3 mx-auto text-center shadow bg-body rounded text-primary" style="background-color: #eee;" id="head">
            <h4>CONTROL DE ACCESO</h4>
        </div>
        <form action="" name="form1" method="post" id="form1">
            <table align="center">
                <tr>
                    <td rowspan="3" width="120"><img src="user.png" align="top" alt="usuario" width="50" height="50"></td>
                </tr>
                <tr>
                    <td width="110">
                    <div class="form-group row">
                        <label for="inputUser" class="col-sm-2 col-form-label">USER</label>
                        </td>
                            <td>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputUser" placeholder="Usuario" name="txtUser">
                        </div>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">PASSWORD</label>
                            </td>
                            <td>
                            <div class="col-sm-12">
                                <input type="password" name="txtPassword" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td heigth="50" colspan="3" align="center">
                        <br>
                        <input type="submit" class="btn btn-secondary" name="btnAcceso" value="INGRESAR">
                        <input type="submit" class="btn btn-danger" name="btnSalir" value="SALIR">
                    </td>
                </tr>
            </table>
        </form>
        <div class="container w-50">
            <br><br>
        <table align="center" class="table table-success table-striped-columns table-hover">
            <tr>
                <th scope="col"><small>USUARIO</small></th>
                <td><small><?php echo $us;?></small></td>
            </tr>
            <tr>
                <th scope="col"><small>PASSWORD</small></th>
                <td><small><?php echo $pas; ?></small></td>
            </tr>
            <tr>
                <th><small>CÓDIGO ASIGNADO A LA SESIÓN</small></th>
                <td><small><?php echo session_id();?></small></td>
            </tr>
        </table>
        </div>
    </div>
    <div class="container2 w-25 mx-auto">
        <?php 
        if($us=="david" && $pas=="12345"){
            echo "<a href='style.css'>IR a la pagina</a>";
        }else{
           echo "<div class='d-flex align-items-center'>";
            echo "<strong role='status'>Loading...</strong>";
            echo "<div class='spinner-border ms-auto' aria-hidden='true'></div>";
            echo"</div>";
        }
        ?>
    </div>
</body>
</html>