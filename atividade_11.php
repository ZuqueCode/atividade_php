<?php

function formatarTexto($texto)
{
    echo "Texto original: $texto <br>";
    echo "Maiúsculas: " . strtoupper($texto) . "<br>";
    echo "Minúsculas: " . strtolower($texto) . "<br>";
    echo "Primeira letra de cada palavra: " . ucwords(strtolower($texto)) . "<br>";
    echo "Quantidade de caracteres: " . strlen($texto);
}

echo "<h3>Exercício 11</h3>";

$texto = "programação em php";

formatarTexto($texto);

echo "<hr>";

?>