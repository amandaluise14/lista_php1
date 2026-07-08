<?php

    function analisarTexto($texto){
    
    $quantPalavras = str_word_count($texto);
    $quantCaracteres = mb_strlen($texto);
    $textoMinusculo = strtolower($texto);
    
    preg_match_all('/[aeiou]/iu', $textoMinusculo, $matchesVogais);
    $quantVogais = count($matchesVogais[0]);
    preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $textoMinusculo, $matchesConsoantes);
    $quantConsoantes = count($matchesConsoantes[0]);
    
    return [
        'quantPalavras' => $quantPalavras,
        'quantCaracteres' => $quantCaracteres,
        'quantVogais' => $quantVogais,
        'quantConsoantes' => $quantConsoantes
    ];

    }

$texto = "Oi, quer trabalhar ou nada a ver?";
$resultado = analisarTexto($texto);

echo "Texto: $texto <br><br>";
echo "Quantidade de palavras: " . $resultado['quantPalavras'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['quantCaracteres'] . "<br>";
echo "Quantidade de vogais: " . $resultado['quantVogais'] . "<br>";
echo "Quantidade de consoantes: " . $resultado['quantConsoantes'];


?>