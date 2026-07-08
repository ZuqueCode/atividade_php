<?php

function calcularMedia($notas)
{
    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Maior nota: $maior <br>";
    echo "Menor nota: $menor <br>";
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
    echo "Situação: $situacao";
}

echo "<h3>Exercício 10</h3>";

$notas = [8.5, 7.0, 6.5, 9.0];

calcularMedia($notas);

?>