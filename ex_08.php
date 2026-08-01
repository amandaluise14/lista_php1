<?php

function ordenarNomes($nomes){

$lista = explode(",", $nomes);

$lista = array_map("trim", $lista);

sort($lista);

return($lista);
}

$nomes = "Carine, Ana, Amanda, Ketlyn, Gabriela";
$resultado = ordenarNomes($nomes);

echo "Lista organizada:<br>"; 
foreach ($resultado as $nome) {
    echo $nome . "<br>";
}
?>