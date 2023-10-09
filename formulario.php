<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- require para incluir archivos -->
</head>
<body>
    <!-- 
    <form action = "" method="post">
        <br>
        <label>Nombre</label>
        <input type = "text" name= "nombre">
        <label>Apellido</label>
        <input type="text" name="apellidos">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<h3>Formulario enviado!</h3>";
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        echo "<h3>" . $nombre . " " . $apellidos . "</h3>";
    }
    ?>

    <form action = "" method="post">
        <br>
        <label>Base</label>
        <input type = "text" name= "base">
        <label>Potencia</label>
        <input type="text" name="potencia">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = (int)$_POST["base"];
        $potencia = (int)$_POST["potencia"];
        $total = 1;
        for($i = 1; $i <= $potencia; $i++){
            $total *= $base;
        }
        echo "<h3>" . $total . "</h3>";
    }
    ?>

    -->

    <!-- Sacar el número mayor de 3 números o si los 3 son iguales -->
    <form action = "" method="post">
        <br>
        <label>Primer número</label>
        <input type = "text" name= "primerNum">
        <br>
        <label>Segundo número</label>
        <input type="text" name="segundoNum">
        <br>
        <label>Tercer número</label>
        <input type="text" name="tercerNum">
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    
    <?php

    function calcularMayor(int $primerNum, int $segundoNum, int $tercerNum) : int | string{
        $res = -1000;
        if($primerNum > $segundoNum && $primerNum > $tercerNum){
            return $res = $primerNum;
        }elseif($segundoNum > $primerNum && $segundoNum > $tercerNum){
            return $res = $segundoNum;
        }elseif($tercerNum > $primerNum && $tercerNum > $segundoNum){
           return $res = $tercerNum;
        }elseif($primerNum == $segundoNum && $primerNum == $tercerNum){
            return $res = "Todos los números introducidos son iguales";
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $primerNum = (int)$_POST["primerNum"];
        $segundoNum = (int)$_POST["segundoNum"];
        $tercerNum = (int)$_POST["tercerNum"];

        $res = calcularMayor($primerNum, $segundoNum, $tercerNum);

        if(is_numeric($res)){
            echo "El número mayor es $res";
        }else{
            echo $res;
        }
       



    }
    ?>






</body>
</html>