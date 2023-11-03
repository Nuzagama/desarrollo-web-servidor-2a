<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php require 'conect.php'; ?>
</head>
<body class="bg-dark text-light">
    <?php

    session_start();

    $usuario = $_SESSION["usuario"];
    
    ?>
    <div class="container">
        <h1>Página principal</h1>
        <h2>Bienvenido  <?php echo $usuario ?></h2>
    </div>

    <?php
    ?>
</body>
</html>