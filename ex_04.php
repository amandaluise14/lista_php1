<?php
function gerarSenha($tamanho)
{
$caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";

    $senha = "";

    for ($i=0; $i<$tamanho; $i++)
    {
    $senha .= $caracteres[rand(0, strlen($caracteres)-1)];
    }
    return $senha;
}

echo "Senha Gerada: " . gerarSenha (12);
?>