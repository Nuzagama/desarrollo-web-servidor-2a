<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- require para incluir archivos -->
</head>
<body>
    <!-- Formulario el precio Sin IVA -->
    <form action = "" method="post">
        <br>
        <label>Precio Sin IVA</label>
        <input type = "text" name= "precioItem">
        <select name="iva">
            <option value="GENERAL">General</option>
            <option value="REDUCIDO">Reducido</option>
            <option value="SUPERREDUCIDO">Superreducido</option>
            <option value="SIN IVA">Sin IVA</option>
        </select>
        <input type = "hidden" name="action" value="iva">
        <br>
        <input type="submit" value="Calcular">
        <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["action"] == "iva"){
        $precio = (int)$_POST["precioItem"];
        $iva = $_POST["iva"];
        $precio = precioSinIVA($precio, $iva);
        
        echo "<br>";
        echo $precio;
        }
    }
        ?>
    </form>

    <h2>Formulario IRPF</h2>
        <!-- Formulario IRPF -->
        <form action = "" method="post">
        <br>
        <label>IRPF</label>
        <input type = "number" step="1000" name= "salario">

        <!-- Campo Oculto -->
        <input type = "hidden" name="action" value="irpf">
        <br><br>
        <input type="submit" value="Calcular">

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["action"] == "irpf"){
               $salario = (float) $_POST["salario"];
               echo salarioImpuestos($salario);
            }
        }
    
    
    ?>


        </form>

    
    <?php

    function precioSinIVA (float|int $precio, string $iva) : float {
    $iva = strtoupper($iva);

    switch($iva){
        case "GENERAL" :
            $precio = $precio * 1.21;
            break;
        
        case "REDUCIDO" :
            $precio = $precio * 1.10;
            break;
        
        case "SUPERREDUCIDO" :
            $precio = $precio * 1.04;
            break;
        
        case "SIN IVA" :
            $precio = $precio * 1;
            break;
    }
    
    return $precio;

}

function salarioImpuestos(float|int $salario) : float {
    $primerTramo = 12450;
    $segundoTramo = 20200;
    $tercerTramo = 35200;
    $cuartoTramo = 60000;
    $quintoTramo = 300000;
    $nuevoSalario = $salario;

    if($salario <= $primerTramo ){
        $salario = $salario * 0.19;
    }elseif($salario > $primerTramo && $salario < $segundoTramo){

       $salario = ($primerTramo * 0.19) + ($salario - $primerTramo) * 0.24;

    }elseif($salario > $segundoTramo && $salario < $tercerTramo){

        $salario = ($primerTramo * 0.19) + ($segundoTramo * 0.24) + ($salario - $primerTramo - $segundoTramo) * 0.30; 

    }elseif($salario > $tercerTramo && $salario < $cuartoTramo){

        $salario = ($primerTramo * 0.19) + ($segundoTramo * 0.24) + ($tercerTramo * 0.30) + ($salario - $primerTramo - $segundoTramo - $tercerTramo) * 0.37;

    }elseif($salario > $cuartoTramo && $salario < $quintoTramo){

        $salario = ($primerTramo * 0.19) + ($segundoTramo * 0.24) + ($tercerTramo * 0.30) + ($cuartoTramo * 0.37) + ($salario - $primerTramo - $segundoTramo - $tercerTramo - $cuartoTramo) * 0.45;
    
    }else{

        $salario = ($primerTramo * 0.19) + ($segundoTramo * 0.24) + ($tercerTramo * 0.30) + ($cuartoTramo * 0.37) + ($quintoTramo * 0.45) - ($salario - $primerTramo - $segundoTramo - $tercerTramo - $cuartoTramo - $quintoTramo) * 0.47;

    }



    return $nuevoSalario - $salario;



}

    ?>






</body>
</html>