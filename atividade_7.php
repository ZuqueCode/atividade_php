<?php

function calcularDesconto($valor)
{
    if ($valor > 1000) {
        $percentual = 30;
    } elseif ($valor > 500) {
        $percentual = 20;
    } elseif ($valor > 100) {
        $percentual = 10;
    } else {
        $percentual = 0;
    }

    $desconto = $valor * ($percentual / 100);
    $final = $valor - $desconto;

    echo "Valor original: R$ " . number_format($valor, 2, ',', '.') . "<br>";
    echo "Desconto: $percentual%<br>";
    echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor final: R$ " . number_format($final, 2, ',', '.');
}

echo "<h3>Exercício 07</h3>";
calcularDesconto(1200);

?>