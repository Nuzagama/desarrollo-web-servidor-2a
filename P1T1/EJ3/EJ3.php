<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Estructuras de Control y Arrays</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h1>Ejercicio 3</h1>
<h3>Álvaro Romero 2ºA DAW</h3>

<p>Un cuadrado perfecto es un número cuya raíz cuadrada es un número entero. Por
ejemplo, la raíz cuadrada de 9 es 3; por tanto, el 9 es un cuadrado perfecto. Sin
embargo, la raíz cuadrada de 8 es aproximadamente 2.82, por lo que 8 no es un
cuadrado perfecto.
Mediante bucles y las estructuras de control que consideres adecuadas, crea un
array que contenga los 50 primeros cuadrados perfectos comenzando desde el 1.
Muestra la información en una tabla HTML5 con CSS que contenga una columna
para indicar el cuadrado perfecto y otra para indicar su raíz cuadrada.</p>


<?php
$cuadrado = 0;
$contador = 0;
$i = 1;
$raiz = 0;

while($contador < 50){
        if (sqrt($i) == floor(sqrt($i))){
            echo sqrt($i) . "                       ";
            echo $i . "<br>";
            $contador++;
        }
        $i++;
}

?>


</body>
</html>

