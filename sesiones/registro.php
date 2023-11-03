<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php require 'conect.php'; ?>
</head>
<body class="bg-light">
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contra = $_POST["contra"];

        $contra_cifrada = password_hash($contra, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios VALUES ('$usuario', '$contra_cifrada')";
        $conexion -> query($sql);

    }
    ?>
    <div class="container">
        <h1>Registrarse</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="contra">
            </div>
            <input class="btn btn-primary" type="submit" value="Registrarse">
        </form>    
    </div>

    <?php
    ?>
</body>
</html>