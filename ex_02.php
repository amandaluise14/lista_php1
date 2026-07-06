<?php

function inverterTexto($texto){

$textoInvertido = strrev($texto);
$quantCaracteres = mb_strlen($texto);

 return [
        'textoInvertido' => $textoInvertido,
        'quantidade' => $quantCaracteres
    ];
}

$textoOriginal = "Oi Pro Icaro";
$resultado = inverterTexto($textoOriginal);

echo "Texto original: $textoOriginal <br> ";
echo "Texto invertido:" . $resultado['textoInvertido'] . "<br><br>";
echo "Quantidade de caracteres:" . $resultado['quantidade']  ;

?>