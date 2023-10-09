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
            <legend>Convertidor de Temperatura</legend>
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
            <legend>Comparador de Máximos</legend>
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

    <br><br><br>

<!-- Formulario Potencia -->
<form action = "" method="post">
<fieldset>
    <legend>Calculadora de Potencia</legend>
<br>
<label>Hacer Potencia de un número</label>
<input type = "number" name= "base">
<input type = "number" name= "potencia">
<input type = "hidden" name="action" value="potencia">
<br>
<input type="submit" value="Calcular">

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["action"] == "potencia"){
$num = (int)$_POST["base"];
$elevado = (int)$_POST["potencia"];
$total = calcularPotencia($num,$elevado);

echo "<br><br><b>Resultado</b><br>";
echo $total;
}
}
?>
</fieldset>
</form>

<br><br><br>

<!-- Formulario Primos -->
<form action = "" method="post">
<fieldset>
    <legend>Calculadora de Primos</legend>
<br>
<label>Número límite para calcular primos</label>
<input type = "number" name= "numLimite">
<input type = "hidden" name="action" value="primo2">
<br>
<input type="submit" value="Calcular">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["action"] == "primo2") {
        $numeroLimite = (int)$_POST["numLimite"];
        $arrayPrimos = mostrarPrimos2($numeroLimite);

        echo "<br><br><b>Resultado</b><br>";
        echo implode(', ', $arrayPrimos); // Convierte el array en una cadena separada por comas
    }
}

?>
</fieldset>
</form>
    
</body>
</html>