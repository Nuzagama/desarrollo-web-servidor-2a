<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP</title>
    <?php
    require("../funciones/muchas_funciones.php")
    ?>
</head>
<body>

    <!-- Formulario Temperatura -->
    <form action = "" method="post">
        <fieldset>
        <br>
        <label>Convertidor de Temperatura</label>
        <input type = "text" name= "temperaturaOriginal">
        <select name="oldType">
            <option value="C">Celsius</option>
            <option value="F">Farenheit</option>
            <option value="K">Kelvin</option>
        </select>
        <select name="newType">
            <option value="C">Celsius</option>
            <option value="F">Farenheit</option>
            <option value="K">Kelvin</option>
        </select>
        <input type = "hidden" name="action" value="temperatura">
        <br>
        <input type="submit" value="Calcular">
        
        <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["action"] == "temperatura"){
        $temperatura = (float)$_POST["temperaturaOriginal"];
        $typeOriginal = $_POST["oldType"];
        $typeNew= $_POST["newType"];
        $temperatura = convertidorTemperatura($temperatura, $typeOriginal, $typeNew);
        
        echo "<br><br><b>Resultado</b><br>";
        echo $temperatura;
        }
    }
        ?>
        </fieldset>
    </form>

    <br><br><br>

        <!-- Formulario Max3 -->
        <form action = "" method="post">
        <fieldset>
        <br>
        <label>Comparador de Máximos o 3 iguales</label>
        <input type = "text" name= "primerNum">
        <input type = "text" name= "segundoNum">
        <input type = "text" name= "tercerNum">
        <input type = "hidden" name="action" value="primo">
        <br>
        <input type="submit" value="Calcular">
        
        <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["action"] == "primo"){
        $primerNum = (int)$_POST["primerNum"];
        $segundoNum = $_POST["segundoNum"];
        $tercerNum= $_POST["tercerNum"];
        $res = calcularMayor($primerNum,$segundoNum,$tercerNum);
        
        echo "<br><br><b>Resultado</b><br>";
        echo $res;
        }
    }
        ?>
        </fieldset>
    </form>
    
</body>
</html>