<?php

function estatisticasNumericas($numeros)
{
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);
    $total = count($numeros);

    if ($total % 2 == 0) {
        $mediana = ($numeros[$total / 2 - 1] + $numeros[$total / 2]) / 2;
    } else {
        $mediana = $numeros[floor($total / 2)];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "<h3>Exercício 14</h3>";
    echo "Números: " . implode(", ", $numeros) . "<br>";
    echo "Soma: $soma <br>";
    echo "Média: $media <br>";
    echo "Maior valor: $maior <br>";
    echo "Menor valor: $menor <br>";
    echo "Mediana: $mediana <br>";
    echo "Quantidade de pares: $pares <br>";
    echo "Quantidade de ímpares: $impares <br>";
}

$numeros = [10, 5, 8, 3, 20, 7];

estatisticasNumericas($numeros);

?>