<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>
    
    <?php
    echo "<h1>Hola Mundo</h1>";
    ?>

    <?php
    
    /*

    echo "<h3>Otro hola Mundo</h3>";

    $boquerones = 7;
    $entero = 1; #INT
    $decimal1 = 1.5; #FLOAT
    $exponente = 3e5; #NUM-PHP

    echo "<br><br>";
    
    $string1 = "Hola";
    $string2 = 'Hola';

    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1';
    echo "<br>";
    echo $string1 . " " . $string2;
    
    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>";

    */

    $array1 = [1,2,3];
    $array2 = ["a","b","c"];
    
    var_dump($array1);
    echo "<br>";
    var_dump($array2);

    $b = true;
    $c = false;
    echo "<br>";
    var_dump($b);
    echo "<br>";

    // Los Booleans no se pueden imprimir. Sirven para controlar.

    // Definir una constante -> Se utiliza la palabra clave "define", la variable se declara en mayúsculas.

    define("EDAD", 25);
    echo EDAD;


    echo "<br>";
    echo "<br>";
    echo "<line>----<b>Date Function</b>---</line>";
    echo "<br>";
    $dia = date("d");
    if($dia <= 15){
        echo "Estamos a principios de mes";
    }else{
        echo "Estamos a finales de mes";
    }

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>Date Function</b>---</line>";
    echo "<br>";

    $hora = date("H");
    if($hora < "12") {
        echo "Buenos días";
    }elseif ($hora < "20") {
        echo "Buenas tardes";
    }else {
        echo "Buenas noches";
    }

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>Random Function</b>---</line>";
    echo "<br>";

    $numAleatorio = rand(1,150);
    if($numAleatorio<10){
        echo "El número " . $numAleatorio . " tiene 1 número";
    }elseif($numAleatorio<100){
        echo "El número " . $numAleatorio . " tiene 2 número";
    }else{
        echo "El número " . $numAleatorio . " tiene 3 número";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $y = 100;
    $x = $numAleatorio;
    if ($x > $y):
        echo $x. "es mayor que ".$y;
        elseif ($x == $y):
            echo $x." igual ".$y;
        else:
            echo $x." no es ni mayor ni igual a ".$y;
        endif;

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>Swtich</b>---</line>";
    echo "<br>";

    $n = rand(1,3);
    switch ($n) {
        case 1: 
            echo "$n es igual a 1";
            break;
        case 2: 
            echo "$n es igual a 2";
            break;
        default:
            echo "$n es igual a 3";
            break;
    }

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>Swtich</b>---</line>";
    echo "<br>";

    $dia = date("l");
    $diaEsp = "";

    if($dia == "Monday"){
        $diaEsp = "Lunes";

    }elseif($dia == "Wednesday"){
        $diaEsp = "Miercoles";

    }elseif($dia == "Tuesday"){
        $diaEsp = "Martes";

    }elseif($dia == "Thursday"){
        $diaEsp = "Jueves";

    }elseif($dia == "Saturday"){
        $diaEsp = "Sabado";

    }elseif($dia == "Sunday"){
        $diaEsp = "Domingo";

    }else{
        $diaEsp = "Viernes";
    }

    switch($diaEsp){
        case "Lunes":
        case "Miercoles":
        case "Viernes":

        echo "Hoy $diaEsp sí hay clases de Desarrollo Web Servidor";
        break;

        default:
        echo "Hoy $diaEsp no hay clases de Desarrollo Web Servidor";
    }


    echo "<br>";
    echo "<br>";
    echo "<line>----<b>1Genera un número aleatorio 1 al 10 y muestra el número generado es par o impar</b>---</line>";
    echo "<br>";

    $numAleatorio = rand(1,10);
    if($numAleatorio%2 == 0 ){
        echo "El $numAleatorio es par";
    }else{
        echo "El $numAleatorio es impar";
    }

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>2Genera un número aleatorio -10 al 10 y muestra si es positivo, negativo o cero</b>---</line>";
    echo "<br>";
    
    $numAleatorio = rand(-10,10);
    if($numAleatorio < 0 ){
        echo "El $numAleatorio es negativo";
    }elseif($numAleatorio > 0 ){
        echo "El $numAleatorio es positivo";
    }else{
        echo "El $numAleatorio es cero";
    }

    echo "<br>";
    echo "<br>";
    echo "<line>----<b>3Muestra en Español el día y mes actual </b>---</line>";
    echo "<br>";

    $diaMes = date("j");
    $mesAno = date("F");
    $mesEsp = ""; 

    if($mesAno == "September"){
        $mesEsp = "Septiembre";
        echo "Estamos a $diaMes" . " de " . "$mesEsp";
    }else{
        echo "No estamos en ese mes";
    }


    echo "<br>";
    echo "<br>";
    echo "<line>----<b>4Muestra la zona horaria en las que nos encontramos</b>---</line>";
    echo "<br>";

    $zoneTime = date("e");
    echo "Nuestra zona horaria es $zoneTime";

    //Match

    $d = date("l");
    $de = match($d){
        "Monday" => "Lunes",
        "Wednesday" => "Miércoles",
        "Friday" => "Viernes",
    };
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $de;

    $dia = date("l");
    $diaEsp = match($dia){
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo",
    };
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $diaEsp;
    echo "<br>";
    echo "<br>";
    echo "<br>";


    //Bucles
    //WHILE
    echo "<br> While <br><br>";
    $i = 1;
    while($i <= 10){
        echo "$i <br>";
        $i++;
    }

    echo "<br> Do while <br><br>";

    //DO WHILE
    $i = 1;
    do{
        echo $i . "<br>";
        $i++;
    }while($i <= 10);


    echo "<br> For <br><br>";

    //FOR

    for($i = 1; $i <= 10; $i++){
        echo $i . "<br>";
    }

    for($i = 1; ; $i++){
        if($i > 10) {
            break;
        }
        echo $i . "<br>";
    }

    echo "EJERCIO 2 <br>";

    for($i = 1; $i <= 50; $i++){
        if($i % 3 == 0 || $i % 2 == 0) {
            if($i % 6 !=0)
            echo $i . " <br> ";
        }
    }

    // 22/09/2023 
    echo "<br> EJERCIO 3 <br>";

    echo "<ul>";
    for($i = 1; $i <= 20; $i++){
        if($i % 2 == 1) {
            echo 
            "<li>$i</li>";
        }
    }
    echo "</ul>";

    echo "<br> EJERCIO 4 <br>";

    echo "<ul>";
    $total = 0;
    for($i = 0; $i <= 20; $i++){
        if($i % 2 == 0) {
        $total += $i;;
        }
    }
    echo $total;
    echo "</ul>";
    // Sacar los primos

    echo "<br> EJERCIO 6 <br>";
    echo "<ul>";
    for($i = 0; $i <= 50; $i++){
        $primo = true;
        for($j = 2; $j <= $i-1 && $primo; $j++){
            if($i % $j == 0){
                $primo = false;
            }
        }
        if($primo){
            echo "$i ";
        }
    }
    echo "</ul>";

    // Sacar los 50 primeros numeros

    echo "<br> EJERCIO 7 <br>";


    $contador = 0;
    $i = 2;
    while($contador < 50){
        $primo = true;
        for($j = 2; $j <= $i-1 && $primo; $j++){
            if($i % $j == 0){
                $primo = false;
            }
        }
        if($primo){
            echo "$i ";
            $contador++;
        }
        $i++;
    }

    // Array PHP

    print("<br><br>");

    $array1 = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3'
    );

    $array2 = array('value1', 'value2', 'value3');

    print_r($array1);

    print("<br><br>");

    print_r($array2);

    print("<br><br>");

    $array3 = [
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3'
    ];

    print_r($array3);

    $arrayID = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";
    print_r($arrayID);
    echo "<br>";
    
    // Añadir elementos a una Array
    echo "<br>";
    array_push($arrayID, 'Nuevo ID');
    print_r($arrayID);
    echo "<br>";
    $arrayID[1] = 'Nuevo ID Alvaro';
    print_r($arrayID);

    // Reseteamos claves 

    $arrayID = array_values($array1);

    // Tamaño del Array >>> count

    // Recorrer array con foreach

    // Versión con solo valor

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";
    print_r($arrayID);
    echo "<br>";

    echo "<br> <ul>";
    foreach ($arrayID1 as $ID){
        echo "<li>$ID<br></li>";
    }

    // Versión con Clave => Valor

    echo "</ul>";

    echo "<br> <ul>";
    foreach ($arrayID1 as $key => $ID){
        echo "<li>";
        echo $key . "=>" . $ID . "<br>";
        echo "</li>";
    }

    echo "</ul>";

    // Versión Tabla

    echo "<table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";

    
        //Ordenar Arrays
        //Sort - Ordena los elementos de menor a mayor y restea las keys
        //Rsort - de Mayor a menor y reset a las keys
        //Asort - de Menor a Mayor sin reset de keys
        //Arsort - de Mayor a menor sin reset de keys
        //Ksort - de Menor a Mayor de acuerdo a las keys
        //Krsort - de Mayor a menor de acuerdo a las keys

    //Ordenado usando SORT

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";


    echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        sort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";

    // Ordenado usando RSORT

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";

        echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        rsort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";

    
    // Ordenado usando asort

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";

    echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        asort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";


    
    // Ordenado usando arsort

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";

    echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        arsort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";

    
    // Ordenado usando KSORT

    $arrayID1 = [
        '77432312L' => 'Alvaro',
        '74543212L' => 'Alberto',
        '77435312L' => 'Andres'
    ];
    echo "<br>";

    echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        ksort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";

    
    // Ordenado usando KRSORT

    echo "<br> <br>
    <table class='default'>
    <thead>
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
    </tr>
        </thead>
        <tbody>";
        krsort($arrayID1);
        foreach ($arrayID1 as $key => $ID){
            echo "<tr><td>$key</td>
            <td>$ID</td></tr>";
        }
    echo"
        </tbody>
        </table>";


    // Array de Arrays, Multidimensional

    $usuarios = array(
        array('Ned', 'Stark'),
        array('Daenerys', 'Targaryen'),
        array('Tyrion', 'Lannister'),
        array('Arya', 'Stark'),
    );

    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Steet Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];

    // Función List
    echo "<br>";
    foreach ($juegos as $juego){
        list($nombre, $consola, $precio) = $juego;
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $consola . "<br>";
        echo "Precio: " . $precio . "<br>";
    }

        // Función List
        echo "<br><br><br>";

        echo "<br> <br>
        <table class='default'>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
            </thead>
            <tbody>";
        foreach ($juegos as $juego){
            list($nombre, $consola, $precio) = $juego;
            echo "<tr><td>" .$nombre . "<br></td>";
            echo "<td>" . $consola . "<br></td>";
            echo "<td>" . $precio . "<br></td></tr>";
        }
        
        echo"
            </tbody>
            </table>";
    
    

    // Como ordenar una Array Multidimensional
    
    $usuarios = array(
        array('Ned', 'Stark'),
        array('Daenerys', 'Targaryen'),
        array('Tyrion', 'Lannister'),
        array('Arya', 'Stark'),
    );

    $nombre = array_column($usuarios, 0);
    $apellido = array_column($usuarios, 1);
    array_multisort($nombre, SORT_ASC, $apellido, SORT_ASC, $usuarios);

    //Ordenar por Consola, Nombre y Precio
    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Steet Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];


    $consola = array_column($juegos, 1);
    $nombre = array_column($juegos, 0);
    $precio = array_column($juegos, 2);
    array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $juegos);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Consola</th>
            <th>Nombre</th>
            <th>Precio</th>
            </tr>
        </thead>";

        foreach($juegos as $juego){
            list($nombre, $consola, $precio) = $juego;
            echo "<tbody>
            <tr>
            <td>$consola</td>
            <td>$nombre</td>
            <td>$precio</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";


    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Steet Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];


    $consola = array_column($juegos, 1);
    $nombre = array_column($juegos, 0);
    $precio = array_column($juegos, 2);
    array_multisort($precio, SORT_ASC, $juegos);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Consola</th>
            <th>Nombre</th>
            <th>Precio</th>
            </tr>
        </thead>";

        foreach($juegos as $juego){
            list($nombre, $consola, $precio) = $juego;
            echo "<tbody>
            <tr>
            <td>$consola</td>
            <td>$nombre</td>
            <td>$precio</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";

    // Añadimos nueva Columna

    $juegos = [
        ["Pacman", "Atari", 60],
        ["Fortnite", "PS4", 0],
        ["Mario Kart", "Super Nintendo", 70],
        ["Steet Fighter", "PS4", 50],
        ["Legend of Zelda", "Nintendo 64", 40],
        ["Castelvania", "Nintendo 64", 55],
    ];

    for($i = 0; $i < count($juegos); $i++){
        $juegos[$i][3] = rand(1,10);
    }

    $consola = array_column($juegos, 1);
    $nombre = array_column($juegos, 0);
    $precio = array_column($juegos, 2);
    $stock = array_column($juegos, 3);
    array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $juegos);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Consola</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            </tr>
        </thead>";

        foreach($juegos as $juego){
            list($nombre, $consola, $precio, $stock) = $juego;
            echo "<tbody>
            <tr>
            <td>$consola</td>
            <td>$nombre</td>
            <td>$precio</td>
            <td>$stock</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";
    //EJER. 1 Números pares en un Array
    $numeroPar = [];
    for($i = 1; $i <= 50; $i++){
        if($i % 2 == 0){
            array_push ($numeroPar, $i);
            echo "$i <br>";
        }
    }

    shuffle($numeroPar);
    rsort($numeroPar);

    print_r($numeroPar);

    echo "<br><br><br>";

    //27--09--2023

    //EJER. 2 GENERAR 10 Num alea 0-100. En un Array mostrarlos ordenados
    // de Mayor a Menor y de Menor a Mayor

    $numerosAleatorios = [];

    for($i = 1; $i < 10; $i++){
        array_push($numerosAleatorios, rand(0,100));
    }

    asort($numerosAleatorios);
    print_r($numerosAleatorios);

    echo "<br><br><br>";

    arsort($numerosAleatorios);
    print_r($numerosAleatorios);

    //EJER. 3 Lista de Paises y Capitales y ordenarlos por el nombre del país
    echo "<br><br><br>";

    $paises = array( "Italy"=>"Rome", "Luxembourg" =>"Luxembourg" , "Belgium"=>
    "Brussels" , "Denmark"=>"Copenhagen" , "Finland"=>"Helsinki" , "France" =>
    "Paris", "Slovakia" =>"Bratislava" , "Slovenia" =>"Ljubljana" , "Germany" =>
    "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands" =>"Amsterdam" , "Portugal" =>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm" , "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
    "Lithuania" =>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest" , "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
    "Vienna", "Poland"=>"Warsaw") ;

    echo "<br>
    <table>
        <thead>
            <tr>
            <th>País</th>
            <th>Capital</th>

            </tr>
        </thead>";

        ksort($paises);

        foreach($paises as $pais => $capital){
            echo "<tbody>
            <tr>
            <td>$pais</td>
            <td>$capital</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";

    // EJER. 4

    /*Crea un array multidimensional que contenga la siguiente
    información de series: título, plataforma y temporadas.
    Crea al menos 5 series con sus respectivos títulos,
    plataforma y temporadas.
    Muéstralos en tres tablas. Una los mostrará tal y como los
    has añadido, otra ordenados por temporada (de menor a mayor)
    y otra ordenados por la plataforma a la que pertecenen, y si
    la plataforma es igual, por el título.*/ 

    $series = [
        ["Hannibal", "Netflix", 3],
        ["True Detective", "HBO", 3],
        ["The Terror", "AMC", 2],
        ["Dahmer", "Netflix", 1],
        ["The Walking Dead", "AMC", 15],

    ];

    echo "<br>
    <table>
        <thead>
            <tr>
            <th>SERIE</th>
            <th>PLATAFORMA</th>
            <th>TEMPORADAS</th>
            </tr>
        </thead>";

        foreach($series as $serie){
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tbody>
            <tr>
            <td>$titulo</td>
            <td>$plataforma</td>
            <td>$temporadas</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";

    $series = [
        ["Hannibal", "Netflix", 3],
        ["True Detective", "HBO", 3],
        ["The Terror", "AMC", 2],
        ["Dahmer", "Netflix", 1],
        ["The Walking Dead", "AMC", 15],

    ];


    $temporadas = array_column($series, 2);
    array_multisort($temporadas, SORT_ASC, $series);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>SERIE</th>
            <th>PLATAFORMA</th>
            <th>TEMPORADAS</th>
            </tr>
        </thead>";

        foreach($series as $serie){
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tbody>
            <tr>
            <td>$titulo</td>
            <td>$plataforma</td>
            <td>$temporadas</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";

    $series = [
        ["Hannibal", "Netflix", 3],
        ["True Detective", "HBO", 3],
        ["The Terror", "AMC", 2],
        ["Dahmer", "Netflix", 1],
        ["The Walking Dead", "AMC", 15],

    ];

    $plataforma = array_column($series, 1);
    array_multisort($plataforma, SORT_ASC, $series);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>SERIE</th>
            <th>PLATAFORMA</th>
            <th>TEMPORADAS</th>
            </tr>
        </thead>";

        foreach($series as $serie){
            list($titulo, $plataforma, $temporadas) = $serie;
            echo "<tbody>
            <tr>
            <td>$titulo</td>
            <td>$plataforma</td>
            <td>$temporadas</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";

    /*
    Crear un array de estudiantes y, aleatoriamente, asignarles
    una nota del 0 al 10.
    Mostrar los estudiantes en una tabla que contenga sus
    nombres, la nota que han sacado y la calificación final
    (suspenso, aprobado, notable o sobresaliente).
    Ordenar los estudiantes por orden alfabético.
    */

    $estudiantes = [
        ["Alvaro"],
        ["Miguel"],
        ["Pablo"],
        ["Fernando"],
        ["Dani"],
    ];



    for($i = 0; $i < count($estudiantes); $i++){
        $estudiantes[$i][1] = rand(0,10);

        switch($estudiantes[$i][1]){
            case 5: case 6: 
                $estudiantes[$i][2] = "SUFICIENTE";
                break;
            case 7: case 8:
                $estudiantes[$i][2] = "NOTABLE";
                break;
            case 9: case 10:
                $estudiantes[$i][2] = "SOBRESALIENTE";
                break;
            default:
                $estudiantes[$i][2] = "SUSPENSO";
                break;
        }

    }

    


    $nombre = array_column($estudiantes, 0);
    array_multisort($nombre, SORT_ASC, $estudiantes);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>ALUMNO</th>
            <th>NOTA</th>
            <th>CALIFICACION</th>
            </tr>
        </thead>";

        foreach($estudiantes as $estudiante){
            list($nombre, $nota, $calificacion) = $estudiante;
            echo "<tbody>
            <tr>
            <td>$nombre</td>
            <td>$nota</td>
            <td>$calificacion</td>
            </tr>
        </tbody>";
        }
        
    echo "</table>";
    echo "<br>";


    /*
    Crear un Array que almacena nombre de productos y sus precios.
    Mostrar en una tabla los productos con sus precios, ordenados
    alfabeticamente del producto.
    Mustra tambien el precio total de todos los productos y cantidad.
    */

    $productos = [
        ["Pizza", 5],
        ["Palmera de Chocolate", 1],
        ["Tortilla de Patatas", 2],
        ["Ensalada Mixta", 4],
        ["Chuletitas de Cordero", 8],
    ];

    $precioTotal = 0;
    $cantidadTotal = 0;
    for($i = 0; $i < count($productos); $i++){
        $cantidadTotal++;
        $precioTotal += $productos[$i][1];
    }

    $nombre = array_column($productos, 0);
    array_multisort($nombre, SORT_ASC, $productos);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio</th>
            </tr>
        </thead>";

        foreach($productos as $producto){
            list($nombre, $precio) = $producto;
            echo "<tbody>
            <tr>
            <td>$nombre</td>
            <td>$precio</td>
            </tr>";
        }
        echo "
        <tr style='background-color: gray'>
        <th>Cantidad Total</th>
        <th>Precio Total</th></tr>
        <tr>
        <td>$precioTotal</td>
        <td>$cantidadTotal</td></tr>

        </tbody>";
        
        
    echo "</table>";
    echo "<br>";

    /*
    Modifica el array anterior para que además de los productos y sus precios almacene
    la cantidad que se ha comprado de cada producto. Muestra en una columna
    adicional el precio total de cada producto (producto x cantidad) y al   final de la tabla el
    precio total de todos los productos comprados y la cantidad de  productos adquiridos
    */
    // STOCK ACTUAL Y PRECIO TOTAL DEL STOCK
    // STOCK TOTAL Y PRECIO TOTAL DEL STOCK TOTAL
    $productos = [
        ["Pizza", 5],
        ["Palmera de Chocolate", 1],
        ["Tortilla de Patatas", 2],
        ["Ensalada Mixta", 4],
        ["Chuletitas de Cordero", 8],
    ];

    $precioTotal = 0;
    $cantidadTotal = 0;
    $stock = 0;
    for($i = 0; $i < count($productos); $i++){
        $cantidadTotal++;
        $precioTotal += $productos[$i][1];

        $productos[$i][2] = rand(1,10);
        $productos[$i][3] = rand(5,15);


    }


    $nombre = array_column($productos, 0);
    array_multisort($nombre, SORT_ASC, $productos);
    echo "<br>
    <table>
        <thead>
            <tr>
            <th>Producto</th>
            <th>Precio</th>
            </tr>
        </thead>";

        foreach($productos as $producto){
            list($nombre, $precio) = $producto;
            echo "<tbody>
            <tr>
            <td>$nombre</td>
            <td>$precio</td>
            </tr>";
        }
        echo "
        <tr style='background-color: gray'>
        <th>Cantidad Total</th>
        <th>Precio Total</th></tr>
        <tr>
        <td>$precioTotal</td>
        <td>$cantidadTotal</td></tr>

        </tbody>";
        
        
    echo "</table>";
    echo "<br>";

    ?>


</body>
</html>