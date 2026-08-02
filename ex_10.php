<?php

function calcularMedia($notas){

$maior = max($notas);
$menor = min($notas);
$media = array_sum($notas) / count($notas);

    if ($media >= 7){
        $situacao = "Aprovado";
    } else if ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "Maior Nota" => $maior,
        "Menor Nota" => $menor,
        "Média" =>$media,
        "Situação" => $situacao
    ];

}

$notas = [10, 10, 9, 10];
$resultado = calcularMedia($notas);

echo "Maior Nota: " . $resultado["Maior Nota"] . "<br>";
echo "Menor Nota: " . $resultado["Menor Nota"] . "<br>";
echo "Média: " . $resultado["Média"] . "<br>";
echo "Situação: " . $resultado["Situação"] . "<br>";

?>