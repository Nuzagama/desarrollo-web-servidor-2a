<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Estructuras de Control y Arrays</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h1>Ejercicio 1</h1>
<h3>Álvaro Romero 2ºA DAW</h3>
<p>Genera mediante bucles FOR anidados las tablas de multiplicar del 1 al 10 y
estructura la información en tablas HTML5 con CSS. El resultado será similar al
siguiente (los estilos CSS que apliques quedan a tu libertad).</p>

<?php

$result = "";
for($i = 1 ; $i <= 10; $i++){
    echo 
    "<table>
    <thead>
        <tr>
        <th>Tabla del $i</th>
        </tr>
    </thead>
    <tbody>";
    for($j = 1 ; $j <= 10; $j++){
        $result = $i * $j;
        echo "<tr>
        <td>$i X $j  =  $result</td>
        </tr>

        </tr>";
    }
echo "</tbody>
</table>";

}



?>


</body>
</html>

