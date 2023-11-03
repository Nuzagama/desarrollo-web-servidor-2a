<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php require 'conect.php'; ?>
</head>
<body class="bg-light">
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contra = $_POST["contra"];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $resultado = $conexion -> query($sql);

        if($resultado -> num_rows === 0){
            ?>
            <div class="alert alert-danger" role="alert">
            El Usuario no existe
            </div>
            <?php
        }else{
            while($fila = $resultado -> fetch_assoc()){
                $contra_cifrada = $fila["contra"];
            }
    
            $acceso_valido = password_verify($contra, $contra_cifrada);
    
            if($acceso_valido){
                ?>
                <div class="alert alert-success" role="alert">
                Logeado con éxito
                </div>
                <?php
                session_start();
                $_SESSION["usuario"] = $usuario;
                header('location: principal.php');
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
                Fallo al logearse, contraseña incorrecta
                </div>
                <?php
            }
        }
    }
    
    ?>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="contra">
            </div>
            <input class="btn btn-primary" type="submit" value="Login">
        </form>    
    </div>

    <?php
    ?>
</body>
</html>