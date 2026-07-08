<?php

function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    if ($origem === $destino) {
        return $valor;
    }

    $tempCelsius = $valor; 
    switch ($origem) {
        case 'F':
            $tempCelsius = ($valor - 32) * 5 / 9;
            break;
        case 'K':
            $tempCelsius = $valor - 273.15;
            break;
    }

    switch ($destino) {
        case 'C':
            return $tempCelsius;
        case 'F':
            return ($tempCelsius * 9 / 5) + 32;
        case 'K':
            return $tempCelsius + 273.15;
        default:
            return null;
    }
}

$valor = 24;
$origem = 'C';
$destino = 'K';
$resultado = converterTemperatura($valor, $origem, $destino);

echo "Temperatura: $valor °$origem <br>";
echo "Origem: $origem <br>";
echo "Destino: $destino <br>";
echo "Resultado: " . number_format($resultado, 2, ',', '.') . " °$destino";