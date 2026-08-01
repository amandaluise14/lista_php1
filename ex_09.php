<?php

function analisarNumero($numero){

if ($numero % 2 == 0){
    $paridade = "Par";
} else {
    $paridade = "Ímpar";
}

 if ($numero < 2) {
        $primo = "Não é primo";
    } else {
        $primo = "É primo";

        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = "Não é primo";
                break;
            }
        }
    }

$soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "É perfeito";
    } else {
        $perfeito = "Não é perfeito";
    }


     return [
        "Paridade" => $paridade,
        "Primo" => $primo,
        "Perfeito" => $perfeito
    ];
}

$numero = 9;
$resultado = analisarNumero($numero);

echo "Número: $numero <br>";
echo "Paridade: " . $resultado["Paridade"] . "<br>";
echo "Primo: " . $resultado["Primo"] . "<br>";
echo "Perfeito: " . $resultado["Perfeito"] . "<br>";
?>