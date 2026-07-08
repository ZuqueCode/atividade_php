<?php

function ordenarNomes($nomes)
{
    $lista = explode(",", $nomes);

    foreach ($lista as &$nome) {
        $nome = trim($nome);
    }

    sort($lista);

    return implode(", ", $lista);
}

echo "<h3>Exercício 08</h3>";

$nomes = "Carlos, Ana, João, Beatriz, Pedro";

echo "Lista original: $nomes <br>";
echo "Lista organizada: " . ordenarNomes($nomes);

echo "<hr>";

?>