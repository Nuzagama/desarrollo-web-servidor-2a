<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Estructuras de Control y Arrays</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h1>Ejercicio 2</h1>
<h3>Álvaro Romero 2ºA DAW</h3>
<p>
Contamos con un array bidimensional donde tenemos almacenados los nombres de
las capitales de provincia de Andalucía y las temperaturas máximas y mínimas para
el día 29/09/2023. Puedes encontrar el código del array al final de este ejercicio
<br>
<b>Parte 1:</b> Añade, mediante un bucle FOR, una cuarta columna donde se indique la
media entre la temperatura máxima y la mínima.
<br>
<b>Parte 2:</b> Ordena el array por la temperatura mínima prevista. En caso de que haya
varias ciudades con la misma temperatura mínima prevista, ordena alfabéticamente
por el nombre de la ciudad.
<br>
<b>Parte 3:</b> Muestra en una tabla HTML5 con CSS todo el contenido del array.
<br>
<b>Parte 4:</b>: Muestra debajo de la tabla, en las etiquetas HTML5 que consideres más
apropiadas, la temperatura mínima media de todas las ciudades y la temperatura
máxima media de todas las ciudades (es decir, el resultado de sumar las
temperaturas de todas las ciudades y dividirlas por el número de ciudades).
<br><br>
$temperaturas = [<br>
["Málaga", 20, 27],<br>
["Sevilla", 17, 36],<br>
["Cádiz", 19, 31],<br>
["Jaén", 19, 33],<br>
["Granada", 12, 35],<br>
["Almería", 20, 27],<br>
["Huelva", 16, 33]<br>
];</p>




<?php

$temperaturas = [
    ["Málaga", 20, 27],
    ["Sevilla", 17, 36],
    ["Cádiz", 19, 31],
    ["Jaén", 19, 33],
    ["Granada", 12, 35],
    ["Almería", 20, 27],
    ["Huelva", 16, 33]
    ];



    // Parte 1 ... Añadimos la Cuarta Columna
$temperaturaMedia = "";
    for($i = 0; $i < count($temperaturas); $i++){
        $temperaturaMedia = $temperaturas[$i][1] + $temperaturas[$i][2];
        $temperaturas[$i][3] = $temperaturaMedia / 2;
    }

    // Parte 2 ... Ordenamos el Array por Temperatu Mínima
    $min = array_column($temperaturas, 1);
    array_multisort($min, SORT_ASC, $temperaturas);

    // Parte 3 ... Mostramos la Tabla
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Ciudad</th>
            <th>Temp Mínima</th>
            <th>Temp Máxima</th>
            <th>Temp Media</th>
            </tr>
        </thead>";

        foreach($temperaturas as $temperatura){
            list($ciudad, $min, $max, $temperaturaMedia) = $temperatura;
            echo "<tbody>
            <tr>
            <td>$ciudad</td>
            <td>$min</td>
            <td>$max</td>
            <td>$temperaturaMedia</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";
?>

<h1>Temperatura media de Andalucía</h1>

<?php
    // Parte 4 ... Sumamos las mínimas y máximos y las dividimos entre las ciudades que hay.
    $minMedia = 0;
    $maxMedia = 0;
    $numeroCiudades = 0;
    for($i = 0; $i < count($temperaturas); $i++){
        $minMedia += $temperaturas[$i][1];
        $maxMedia += $temperaturas[$i][2];
        $numeroCiudades++;
    }
    echo "Mínimas: " . round($minMedia/$numeroCiudades) . "<br>";
    echo "Máximas: " . round($maxMedia/$numeroCiudades) . "<br>";

?>


<?php



?>


</body>
</html>

