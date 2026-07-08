<?php

function calcularFormula($x, $y) {
    $soma = $x + $y;
 
    if ($soma == 0) {
        return "Não é possível realizar a divisão, pois a soma deu zero.";
    }
 
    $resultado = (($x * $x) + ($y * $y)) / $soma;
    return $resultado;
}
 
echo "Exercício 01\n";
echo calcularFormula(4, 2) . "\n";
echo calcularFormula(-5, 5) . "\n\n";