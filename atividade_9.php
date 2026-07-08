<?php

function analisarNumero($numero)
{
    
    if ($numero % 2 == 0) {
        $paridade = "Par";
    } else {
        $paridade = "Ímpar";
    }

    $primo = true;

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "Sim";
    } else {
        $perfeito = "Não";
    }

    echo "Número: $numero <br>";
    echo "Paridade: $paridade <br>";
    echo "Primo: " . ($primo ? "Sim" : "Não") . "<br>";
    echo "Perfeito: $perfeito";
}

echo "<h3>Exercício 09</h3>";
analisarNumero(28);

echo "<hr>";

?>