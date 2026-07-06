<?php

function inverterTexto($texto){

$textoInvertido = strrev($texto);
$quantCaracteres = mb_strlen($texto, 'UTF-8');

 return [
        'textoInvertido' => $textoInvertido,
        'quantidade' => $quantidadeCaracteres
    ];
}

$textoOriginal = "Oi Pro Icare";
$resultado = inverterTexto($textoOriginal);

echo "Texto original: $textoOriginal <br> ";
echo "Texto invertido: $resultado['textoInvertido'] <br><br>";
echo "Quantidade de caracteres: $resultado['quantidade']"  ;

?>