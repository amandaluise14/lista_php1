<?php

function calcularDesconto($valorOriginal) {

if ($valorOriginal > 1000){
    $percentual = 0.3;
} else if ($valorOriginal > 500) {
    $percentual = 0.2;
} else if ($valorOriginal > 100) {
    $percentual = 0.1;
} else {
    $percentual = 0;
}

$desconto = ($valorOriginal * $percentual);
$valorFinal = $valorOriginal - $desconto;

return [
        "valorOriginal" => $valorOriginal,
        "percentualDesconto" => $percentual * 100 . "%",
        "desconto" => $desconto,
        "valorFinal" => $valorFinal
    ];

}

$valorOriginal = 1200;

$resultado = calcularDesconto($valorOriginal);


echo "Valor original: R$ " . number_format($resultado["valorOriginal"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: " . $resultado["percentualDesconto"] . "<br>";
echo "Valor do desconto: R$ " . number_format($resultado["desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["valorFinal"], 2, ",", ".");
