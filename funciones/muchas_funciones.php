<?php

// Ejercicio Potencia

function calcularPotencia(int $num, int $elevado) :int{
        $total = 1;
        if($num > 0 && $elevado >= 0){
            for($i = 1; $i <= $elevado; $i++){
                $total *= $num;
            }
        }
        return $total;
    }


    // Ejercicio calcular mayor numero o iguales del formulario (max_3)

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

    // Temperatura
    function celsiusAFarenheit(int|float $temperatura) : int|float{
        $newTemp = ($temperatura * 1.8) + 32;
        return $newTemp;
    }

    function farenheitACelsius(int|float $temperatura) : int|float{
        $newTemp = ($temperatura - 32) / 1.8;
        return $newTemp;
    }

    function celsiusAKelvin(int|float $temperatura) : int|float{
        $newTemp = $temperatura + 273.15;
        return $newTemp;
    }

    function kelvinACelsius(int|float $temperatura) : int|float{
        $newTemp = $temperatura - 273.15;
        return $newTemp;
    }

    function kelvinAFarenheit(int|float $temperatura) : int|float{
        $newTemp = 1.8 * ($temperatura - 273.15) + 32;
        return $newTemp;
    }

    function farenheitAKelvin(int|float $temperatura) : int|float{
        $newTemp = (5/9) * ($temperatura - 32) + 273.15;
        return $newTemp;
    }

    // Primero Temperatura, Unidad de la que viene y Unidad a la que debe convertirse

    function convertidorTemperatura(float $temperatura, string $typeOriginal, string $typeNew): string | float {
        // Controlamos que si un usuario ingresa la letra en minúscula la ponemos en mayúsculas
        $typeOriginal = strtoupper($typeOriginal);
        $typeNew = strtoupper($typeNew);

        $convert = match(true){
            $typeOriginal == "C" && $typeNew == "F" => celsiusAFarenheit($temperatura),
            $typeOriginal == "F" && $typeNew == "C" => farenheitACelsius($temperatura),
            $typeOriginal == "C" && $typeNew == "K" => celsiusAKelvin($temperatura),
            $typeOriginal == "K" && $typeNew == "C" => kelvinACelsius($temperatura),
            $typeOriginal == "K" && $typeNew == "F" => kelvinAFarenheit($temperatura),
            $typeOriginal == "F" && $typeNew == "K" => farenheitAKelvin($temperatura),
            default => "Acabas de calcular la misma temperatura, ¿eres normal?"
        };

        return $convert;
    }


    // Array de Primos
    function mostrarPrimos2(int $numeroLimite) : array {
        $arrayPrimos = [];
        for($i = 2; $i <= $numeroLimite; $i++){
            if (esPrimo($i)) array_push($arrayPrimos, $i);
        }
        return $arrayPrimos;
    }

    // Comprobamos si un Primo lo es o no 
    function esPrimo(int $numeroLimite) : bool {
        $primo = true;
        for($j = 2; $j <= $numeroLimite-1 && $primo; $j++){
            if($numeroLimite % $j == 0){
                $primo = false;
            }
        }
        return $primo;
    }




?>