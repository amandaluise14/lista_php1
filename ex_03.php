<?php

function mascararCpf($cpf){

    $ultimos4 = substr($cpf, -4);
    $cpfMascarado = str_repeat("*", strlen($cpf) -4) . $ultimos4;

 return $cpfMascarado;
}

    $cpf = 12345678912;

    echo "CPF original: $cpf <br>";
    echo "CPF Mascarado:" . mascararCpf($cpf);
?>